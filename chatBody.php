<?php
  session_start();
  $receive = $_POST['chatContent'];
  $to = $_POST['to];

  if ($receive != "") {
    include '/chat/php/dbInsertChat.php';
  }
 ?>
