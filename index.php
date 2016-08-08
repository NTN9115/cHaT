<?php
  if (PATH_SEPARATOR == ":") {
    set_include_path('/var/www/html/');
  }else {
    // set_include_path('c:/wamp/www/cHat/');
  }
  $title = "Welcome cHaT";
  $lessSheetFile = "index";

  $content = "index";
  include 'templet/genelTemplet.php';
?>
