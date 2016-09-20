<?php
  // set_include_path('/var/www/html/');
  // set_include_path('/Library/WebServer/Documents');
  // session_start();
  // if ($_SESSION['Online'] != true) {
  //  exit("403");
  // }
  // session_write_close();
  $flag = $POST['flag'];
  $queryEmail = $POST['qEmail'];
  $queryName = $POST['qName'];
  $userID = $POST['userID'];
  $timeStamp = $POST['timeStamp'];

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
   4.[startChatWith]
    4.1 revecive a userID to start a chat
    4.2 send current timestamp
    4.3 receive a timestamp and a userID
    4.4 query DB
    4.5 send chat
  -->
