<?php
if (PATH_SEPARATOR == ":") {
  set_include_path('/var/www/html/');
}else {
  set_include_path('c:/wamp/www/cHat/');
}
  $title = "Login";
  $lessSheetFile = "login";

  $content = "login";
  include 'templet/genelTemplet.php';
?>
