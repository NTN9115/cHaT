<?php
  session_start();
  $receivechatContent = $_POST['chatContent'];
  $to = $_POST['to'];
  $receiveChatList = $POST['recevieChatList']

  if ($receivechatContent != "") {
    include '/chat/php/dbInsertChat.php';
    exit();
  }
  if ($receiveChatList != "") {
    include '/chat/php/dbQueryChatList.php'
  }

 ?>
