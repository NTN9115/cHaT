const LocalStrategy = require('passport-local').Strategy;

const User = new require('../app/model/user');

module.exports = function (passport) {
  //no need for session, use token instead
  
  //LOCAL SIGNUP
  passport.use('local-signup', new LocalStrategy({
    // usernameFiled    : 'email',
    // passwordFiled    : 'password',
    passReqToCallback: true
  }, function (username, password, done) {
    // User.findOne({'email': email}, function (err, user) {
    //   if (err) {
    //     return done(err);
    //   }
    //
    //   if (user) {
    //     return done(null, false, {message: 'email already used'});
    //   } else {
    //
    //   }
    // });
    done(null, {user: "here"});
  }));
};
