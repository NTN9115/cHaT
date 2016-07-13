<?php

  $server = "127.0.0.1";
  $user = "root";
  $passwd = "";

  //Connect to DB
  $connect = mysqli_connect($server,$user,$passwd);
  if (!$connect) {
    die('Connect failed')
  }
  echo "good";
  //============================================================================

  //close connect
  mysqli_close($conn);
  //============================================================================
 ?>
