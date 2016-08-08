<?php
if (PATH_SEPARATOR == ":") {
  set_include_path('/var/www/html/');
  set_include_path('/Library/WebServer/Documents');
}else {
  set_include_path('c:/wamp/www/cHat/');
}
  $title = "Login";
  $lessSheetFile = "login";
  $jsFile = "/js/action";
  
  $content = "login";
  include 'templet/genelTemplet.php';
?>
