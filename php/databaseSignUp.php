<?php

  $server = "192.168.24.156:3306";
  $user = "root";
  $passwd = "876412";

  //Connect to DB
  $connect = mysqli_connect($server,$user,$passwd);
  if (!$connect) {
    die('Connect failed');
  }
  mysqli_autocommit($connect,TRUE);
  mysql_select_db($connect,basic_user);
  //============================================================================

  //Query user
  //  TO DO
  //===========================================================================

  //Insert User
  $userData = "INSERT INTO basic_user (user_email,user_name,user_passwd) Vaules (";
  $userData = $userData.Email.userName.password_hash($Passwd,PASSWORD_DEFAULT).")";
  mysqli_query($connect,$userData);


  //close connect
  mysqli_close($conn);
  //============================================================================
 ?>
