<?php
  session_start();
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
  $result = mysqli_query($conn,"select * from userFriends where user1ID = \"{$ID}\"");
  while ($row = mysqli_fetch_assoc($result)) {
    $rowArray = array(
      "user1ID" => $row['user1ID'],
      "user2ID" => $row['user2ID'],
    );
    $resultArray[] = $rowArray;
    print_r($rowArray);
    echo "<br>";
  }
print_r($resultArray);
echo "<br>";
echo json_encode($resultArray);
?>
<!--
  1.use session to check if online
    1.2 if offling ,jump to login pager
  2.blender page

 -->
