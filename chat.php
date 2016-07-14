<?php
// Auth
session_start();
if ($_SESSION['Online'] != 'true') {
  header("/chat/hellouser/signin.html");
  exit();
}
//==============================================================================
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>cHaT</title>

  <!-- icon set -->
    <link rel="apple-touch-icon" sizes="180x180" href="/chat/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/chat/icon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/chat/icon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/chat/icon/manifest.json">
    <link rel="mask-icon" href="/chat/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
  <!-- ===================================================================== -->

  <link rel="stylesheet" href="/char/css/mainBody.less">
  <script src="/chat/js/less.min.js" charset="utf-8"></script>
</head>
<body>


  <script src="/chat/js/jQuery.js" charset="utf-8"></script>
  <script src="/chat/js/moment.js" charset="utf-8"></script>
  <script src="/chat/js/chat.js" charset="utf-8"></script>
</body>
</html>
