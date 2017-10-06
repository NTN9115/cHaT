const User = new require('../app/model/user');
const bcrypt = require('bcrypt');
const expect = require('chai').expect;
const mongoose = require('mongoose');
const Promise = require('bluebird');

mongoose.Promise = Promise;

const testDB = 'mongodb://localhost/mongoose-spec';

const dummyUserA = {
  userName: "natsuki",
  password: "1234",
  email   : "yuki@live.com"
};

const dummyUserB = {
  userName: "natsuki",
  password: "1234",
  email   : "yuki@live.com"
};

const falseDummyUser = {
  userName: "natsuki",
  password: "5678",
  email   : "yuki@live.com"
};

describe('User model password hash test', function () {
  before(function (done) {
    //connect to test db
    mongoose.connect(testDB, {useMongoClient: true}, function (err) {
      if (err) {
        throw err;
      }
    });
    
    //create dummyUserA
    let u = new User(dummyUserA);
    
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
    User.remove({}, function (err) {
      if (err) {
        throw err;
      }
    });
    mongoose.disconnect();
  });
  
  it('should generateHash correctly use method .generateHash', function (done) {
    User.find({}, function (err, users) {
      if (err) {
        throw err;
      }
      
      expect(bcrypt.compareSync(dummyUserA.password, users[0].password)).to.be.ok;
      done();
    });
  });
  it('should matching currect passowrd', function (done) {
    User.findOne({userName: dummyUserA.userName}, function (err, userfind) {
      if (err) {
        throw err;
      }
      
      User.validPassword(dummyUserA.password, userfind.password, function (err, isMatch) {
        if (err) {
          throw err;
        }
        expect(isMatch).to.be.ok;
        done();
      });
    });
  });
  it('should not matching false password', function (done) {
    User.findOne({userName: dummyUserA.userName}, function (err, userfind) {
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
  });
});

describe('user model basic test', function () {
  before(function (done) {
    //connect to test db
    mongoose.connect(testDB, {useMongoClient: true}, function (err) {
      if (err) {
        throw err;
      }
    });
    
    //create dummyUserA
    let u = new User(dummyUserA);
    
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
    
    User.remove({}, function (err) {
      if (err) {
        throw err;
      }
    });
    mongoose.disconnect();
  });
  
  it('should not have duplicated email', function (done) {
    let u = new User(dummyUserB);
    
    u.save().catch(function (err) {
      expect(err.code).to.equal(11000);
      done();
    })
    
  });
});
