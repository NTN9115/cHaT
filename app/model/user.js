const mongoose = require('mongoose');
const bcrypt = require('bcrypt');
const SALT_WORK_FACTOR = 8;

//define the Schema for user
let UserSchema = mongoose.Schema({
  userName: {type: String, required: true, unique: true},
  password: {type: String, required: true},
  UID     : Number,
  email   : {type: String, required: true, unique: true}
});

//methods ===================
UserSchema.pre('save', function (next) {
  let user = this;
  if (!user.isModified()) {
    next();
  }
  bcrypt.genSalt(SALT_WORK_FACTOR, function (err, salt) {
    if (err) {
      return next(err);
    }
    
    bcrypt.hash(user.password, salt, function (err, hash) {
      if (err) {
        throw err;
      }
      
      user.password = hash;
      next();
    });
  });
});

UserSchema.statics.validPassword = function (candidatePassword, bcryptedPassword, callback) {
  bcrypt.compare(candidatePassword, bcryptedPassword, function (err, isMatch) {
    if (err) {
      throw err;
    }
    callback(null, isMatch);
  });
};

module.exports = mongoose.model('User', UserSchema);