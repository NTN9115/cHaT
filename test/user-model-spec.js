const User = new require('../app/model/user');
const bcrypt = require('bcrypt');
const expect = require('chai').expect;
const mongoose = require('mongoose');
mongoose.Promise = Promise;

const testDB = 'mongodb://localhost/mongoose-spec';


dummyUser = {
  userName: "natsuki",
  password: "1234",
  email   : "yuki@live.com"
};

falseDummyUser = {
  userName: "natsuki",
  password: "5678",
  email   : "yuki@live.com"
};

describe('User model database test, incloud model method', function () {
  before(function (done) {
    //connect to test db
    mongoose.connect(testDB, {useMongoClient: true}, function (err) {
      if (err) {
        throw err;
      }
    });
    
    //create dummyUser
    let u = new User(dummyUser);
    
    //invoke UserSchema.pre
    u.save(function (err) {
      if (err) {
        throw err;
      }
      done();
    });
  });
  after(function () {
    //drop test db table
    User.remove({},function (err) {
      if (err) {
        throw err;
      }
    });
  });
  
  it('should generateHash correctly use method .generateHash', function (done) {
    User.find({}, function (err, users) {
      if (err) {
        throw err;
      }
      
      expect(bcrypt.compareSync(dummyUser.password, users[0].password)).to.be.ok;
      done();
    });
  });
  it('should matching currect passowrd', function (done) {
    User.findOne({userName: dummyUser.userName}, function (err, userfind) {
      if (err) {
        throw err;
      }
      
      User.validPassword(dummyUser.password, userfind.password, function (err, isMatch) {
        if (err) {
          throw err;
        }
        expect(isMatch).to.be.ok;
        done();
      });
    });
  });
  it('should not matching false password', function (done) {
    User.findOne({userName: dummyUser.userName}, function (err, userfind) {
      if (err) {
        throw err;
      }
    
      User.validPassword(falseDummyUser.password, userfind.password, function (err, isMatch) {
        if (err) {
          throw err;
        }
        expect(isMatch).not.to.be.ok;
        done();
      });
    });
  })
});

