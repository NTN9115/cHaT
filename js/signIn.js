$(function() {
  $('button[type=submit]').click(function(){
    event.preventDefault();
    login();
  });
  $('.form-signin').submit(function(){
    event.preventDefault();
    login();
  });

  $('button[class="close"]').click(function(){
    $('.alert-danger').css("display","none");
    $('#subErrorMessage').remove();
  });
});

function login() {
  var emailValue = $('#inputEmail').val();
  var PasswdValue = $('input[type=password]').val();

  //verify input
  if (emailValue == "") {
    $('#errorMessage').append("<span id=\"subErrorMessage\">Please input Email</span>");
    $('.alert-danger').css("display","block");
    return 1;
  }
  if (PasswdValue == "") {
    $('#errorMessage').append("Please input Password");
    $('.alert-danger').css("display","block");
    return 1;
  }

}
