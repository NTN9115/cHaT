<?php
  set_include_path('/var/www/html/');
  set_include_path('/Library/WebServer/Documents');
  session_start();
  if ($_SESSION['Online'] != true) {
   exit("403");
  }
  session_write_close();
  $flag = $POST['flag'];
  $queryEmail = $POST['qEmail'];
  $queryName = $POST['qName'];

  switch ($flag) {
    case 'search':
      include 'userAction/DBAuthConnect.php';
      $resultArray = array();
      if ($queryEmail != "") {
        $result = mysqli_query($conn,"select * from userBasic where userEmail = \"{$queryEmail}\"");
      } else {
        $result = mysqli_query($conn,"select * from userBasic where userName = \"{$queryName}\"");
      }
      while ($row = mysqli_fetch_assoc($result)) {
        $rowArray = array(
          'userID' => $row['userID'],
          'userName' => $row['userName'],
          'userEmail' => $row['userEmail']
       );
       $resultArray[] = $rowArray;

       echo json_encode($resultArray);

      }
      mysqli_free_result($result);
      break;

      case 'getFull':
        include 'userAction/DBAuthConnect.php';
        $resultArray = array();

      break;

      case 'getCurrentChat':
        include 'userAction/DBAuthConnect.php';
        $resultArray = array();
      break;

      default:
      exit("404");
      break;
    }
 ?>
 <!--
 flag can be:
   1.[search]
     1.1 search by userName
     1.2 search by userEmail
   2.[getFull]
    return what blende whole page needed. e.g:
      {
        "userInf" :{
          "userID"   : "1",
          "userName" : "Natsuki",
          "userEmail": "natsuki@chat.com"
        }
        "friendsList" :[
          {
            "userID"   :"13",
            "userName" :"Ryujo",
            "userEmail":"ryujo@chat.com"
            "groupName":"";
          },
          {
            "userID"   :"14",
            "userName" :"Yudachi",
            "userEmail":"yudachi@chat.com"
            "groupName":"";
          }
          {
          "userID"   :"14",
          "userName" :"Ryujo",
          "userEmail":"ryujo@chat.com"
          "groupName":"Family";
          }
        ]
      }
   3.[getCurrentChat]
  -->
