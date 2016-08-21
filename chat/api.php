<!--
flag can be:
  1.[search]
    1.1 search by userName
    1.2 search by userEmail
  2.[getFull]
  3.[getCurrentChat]
 -->
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
      if ($queryEmail != "") {
        $result = mysqli_query($conn,"select * from userBasic where userEmail = \"{$queryEmail}\"");
        while ($row = mysqli_fetch_assoc($result)) {
          // TODO
        }
      } else {
        $result = mysqli_query($conn,"select * from userBasic where userEmail = \"{$queryName}\"");
        // TODO
      }
      mysqli_free_result($result);

      break;
      case 'getFull':
      //  TODO
      break;
      case 'getCurrentChat':
      //  TODO
      break;

      default:
      exit("404");
      break;
    }
 ?>
