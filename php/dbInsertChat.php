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
mysqli_select_db($connect,chat_user);
//============================================================================

$userID = $_SESSION['userID'];
$timeStamp = round(microtime(true) * 1000);
 ?>
