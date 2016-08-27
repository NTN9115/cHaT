<?php
  // session_start();
  set_include_path('/var/www/html/');
  set_include_path('/Library/WebServer/Documents');
  // Check if online
  // if ($_SESSION['Online'] != true) {
  //   exit("403");
  // }
  // session_write_close();
  //=============================================================================

  //Test information
  $ID = 1;
  //=============================================================================
  $resultArray = array();
  include 'userAction/DBAuthConnect.php';
  $result = mysqli_query($conn,"SELECT userID, userName, userEmail ,groupName from userBasic inner join userFriends ON userBasic.userID = userFriends.user2ID and userFriends.user1ID = {$ID}");
  echo mysqli_error($conn);
  while ($row = mysqli_fetch_assoc($result)) {
    $rowArray = array(
      "userID" => $row['userID'],
      "userName" => $row['userName'],
      "groupName" => $row['groupname']
    );
    $resultArray[] = $rowArray;
  }
  mysqli_free_result($result);
  $getFull["friendsList"] = $resultArray;
  $rowArray = null;
  $row = null;

  $result = mysqli_query($conn,"select userID, userName, userEmail from userBasic where userID = {$ID}");
  $row = mysqli_fetch_assoc($result);
  $rowArray = array(
    "userID" => $row['userID'],
    "userName" => $row['userName'],
    "userEmail" => $row['userEmail']
  );
  $getFull["userInf"] = $rowArray;
  echo json_encode($getFull);
  mysqli_free_result($result);
  $getFull["friendsList"] = $resultArray;
  $rowArray = null;
  $row = null;
  exit();
?>
<!--
  1.use session to check if online
    1.2 if offling ,jump to login pager
  2.blender page

 -->
