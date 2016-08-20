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
  $flag = $POST['flag'];
  $queryEmail = $POST['qEmail'];
  $queryName = $POST['qName'];

  switch ($flag) {
    case 'search':
      include 'userAction/DBAuthConnect.php';
      if ($queryEmail != "") {
        $result = mysqli_query($conn,"");
      } else {
        # code...
      }

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
