$(document).ready(function() {
  if ($.url().param('target') == "signin") {
    $('collapseSignUpForm').collapse('hide');
  }else {
    $('collapseSignInForm').collapse('hide');
  }
  $('button[type=submit]').click(function(event) {
    event.preventDefault();
  });
});
