<?php
  //Unit test
  $User1 = "21";
  //
  $server = "192.168.24.156:3306";
  $user = "root";
  $passwd = "876412";

  //Connect to DB
  $connect = mysqli_connect($server,$user,$passwd);
  if (!$connect) {
    die('Connect failed');
  }
  mysqli_autocommit($connect,TRUE);
  mysqli_select_db($connect,user_friends);
  //============================================================================

  $queryContent = "select * form user_friends where User1=".$User1;
  $queryChatList = mysqli_query($connect,$queryContent);
  echo $queryChatList;

 ?>
