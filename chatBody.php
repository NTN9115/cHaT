<?php
  session_start();
  $receivechatContent = $_POST['chatContent'];
  $to = $_POST['to'];

  if ($receivechatContent != "") {
    include '/chat/php/dbInsertChat.php';
  }
 ?>
