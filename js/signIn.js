$(function() {
  $('button[type=submit]').click(function(){
    event.preventDefault();
    $('.alert-danger').css("display","none");
    $('#subErrorMessage').remove();
    login();
  });
  $('.form-signin').submit(function(){
    event.preventDefault();
    $('.alert-danger').css("display","none");
    $('#subErrorMessage').remove();
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
  if (emailValue === "") {
    $('#errorMessage').append("<span id=\"subErrorMessage\">Please input Email</span>");
    $('.alert-danger').css("display","block");
    return 1;
  }
  if (PasswdValue === "") {
    $('#errorMessage').append("<span id=\"subErrorMessage\">Please input Password</span>");
    $('.alert-danger').css("display","block");
    return 1;
  }
  //============================================================================


  //Use Ajax to request a Token
  var xmlhttpToken;
  if (window.XMLHttpRequest) {
    xmlhttpToken = new XMLHttpRequest();
  } else {
    xmlhttpToken = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpToken.open("GET","/chat/php/verfilelogin.php?requireToken=True",false);
  xmlhttpToken.send();
  var token = xmlhttpToken.responseText;
  //============================================================================


  //Mix token and password to transport,later
  //TO DO
  var email = $('#inputEmail').val();
  var passwd = md5($('input[type="password"]').val());
  var sendContent = "Email=" + email + "&Passwd=" + passwd + "&receiveToken=" + token;
  alert(sendContent);
  var xmlhttpVerfi;
  if (window.XMLHttpRequest) {
    xmlhttpVerfi = new XMLHttpRequest();
  } else {
    xmlhttpVerfi = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpVerfi.open("POST","/chat//php/verfilelogin.php",false);
  xmlhttpVerfi.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttpVerfi.send(sendContent);

}
