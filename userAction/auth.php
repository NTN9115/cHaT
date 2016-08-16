<?php
  //for sign in:
  //1. bowser use ajax with in requestToken flag to request a token;
  //2. server send a token to bowser;
  //3. server accept signin flag,userEmail,hased password and the token had been sent use POST;
  //4. server query database;
  //5. server callback use ajax;
  $flag = $_POST['flag'];
  $userName = $_POST['userName'];
  $userEmail = $_POST['userEmail'];
  $passWd = $_POST['passwd'];
  $token = $_POST['token'];
  set_include_path('/var/www/html/');

  if ($flag == "requestToken") {
    session_start();
    $_SESSION['token'] = time();
    echo password_hash($_SESSION['token'],PASSWORD_DEFAULT);
  }else {
    session_start();
    if (password_verify($_SESSION['token'],$token)) {
      if ($flag == "signin") {
        include 'userAction/DBAuthConnect.php';

        //check if user exist
        if (!mysqli_num_rows(mysqli_query($conn,"select * from userBasic where userName = \"{$userEmail}\""))) {
          echo 400;
        }else {
          //TODO
        }
      }elseif ($flag == "signup") {
        include 'userAction/DBAuthConnect.php';

        //check if user exist
        if (!mysqli_num_rows(mysqli_query($conn,"select * from userBasic where userName = \"{$userEmail}\""))) {
          echo 400;
        }else {
          //TODO
        }
      }else {
        die("Error Request");
      }
      $_SESSION['Online'] = true;
      echo 200;
    }else {
      $_SESSION['Online'] = false;
      echo 403;
    }
  }
 ?>
