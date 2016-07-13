<?php

  //Initializing variables
         $token = "";
         $Email = "";
      $userName = "";
        $Passwd = "";
  $receiveToken = "";
  //Check if declared
       $token = isset($_GET['requireToken']) ? $_GET['requireToken'] : '';
       $Email = isset($_POST['email'])       ?       $_POST['email'] : '';
    $userName = isset($_POST['username'])    ?    $_POST['username'] : '';
      $Passwd = isset($_POST['passwd'])      ?      $_POST['passwd'] : '';
$receiveToken = isset($_POST['token'])       ?       $_POST['token'] : '';



  if ($token != "") {
    echo ($localToken = substr(time(),-5));
    session_start();
    $_SESSION['token'] = $localToken;
  } else {
    session_start();
    if ($receiveToken != $_SESSION['token']) {
      die('Err401')
    }
    include("/chat/php/databaseSignUp.php");
    }
 ?>
