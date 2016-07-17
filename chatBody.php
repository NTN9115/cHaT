<?php
  session_start();
  $receive = $_POST['chatContent'];

  if ($receive != "") {
    include '/chat/php/dbInsertChat.php';
  }
 ?>
