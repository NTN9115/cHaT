<?php
  //for sign in:
  //1. bowser use ajax with in requestToken flag to request a token;
  //2. server send a token to bowser;
  //3. server accept signin flag,userEmail,hased password and the token had been sent use POST;
  //  3.1 if no flag received,return 403
  //4. server query database;
  //  4.1 if userEmail already using,return 400
  //  4.2 if userEmail & userName do not match,return 402

  $flag = $_POST['flag'];
  if ($flag == "") {
    $flag = $_GET['flag'];
  }
  $userName = $_POST['userName'];
  $userEmail = $_POST['userEmail'];
  $passWd = $_POST['passwd'];
  $token = $_POST['token'];
  set_include_path('/var/www/html/');
  set_include_path('/Library/WebServer/Documents');

  $passWd = password_hash($passWd,PASSWORD_DEFAULT);

  if ($flag == "requestToken") {
    session_start();
    $_SESSION['token'] = time();
    echo password_hash($_SESSION['token'],PASSWORD_DEFAULT);
    exit();
  }else {
    session_start();
    if (password_verify($_SESSION['token'],$token)) {
      if ($flag == "signin") {
        include 'userAction/DBAuthConnect.php';

        if (!password_verify(mysqli_result(mysqli_query($conn,"select userPW from userBasic where userEmail = \"{$userEmail}\""),0),passWd)) {
          exit("402");
        }else {
          mysqli_query($conn,"");
        }

      }elseif ($flag == "signup") {           //Sign Up
        include 'userAction/DBAuthConnect.php';

        //check if user exist
        if (mysqli_num_rows(mysqli_query($conn,"select * from userBasic where userEmail = \"{$userEmail}\"")) != 0) {
          exit("400");
        }else {
          mysqli_query($conn,"insert into userBasic (userName,userEmail,userPW) values (\"{$userName}\",\"{$userEmail}\",\"{$passWd}\")");
        }
      }else {
        die("Error Request");
      }
      $_SESSION['Online'] = true;
      exit("200");
    }else {
      $_SESSION['Online'] = false;
      exit("403");
    }
  }
 ?>
