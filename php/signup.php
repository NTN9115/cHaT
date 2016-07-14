<?php

  error_reporting(E_ERROR | E_WARNING | E_PARSE); //Disable Notice;

  //Initializing variables
         $token = "";
         $Email = "";
      $userName = "";
        $Passwd = "";
  $receiveToken = "";
  //============================================================================


  //Check if declared
       $token = isset($_GET['requireToken']) ? $_GET['requireToken'] : '';
       $Email = isset($_POST['Email'])       ?       $_POST['Email'] : '';
    $userName = isset($_POST['username'])    ?    $_POST['username'] : '';
      $Passwd = isset($_POST['passwd'])      ?      $_POST['passwd'] : '';
$receiveToken = isset($_POST['token'])       ?       $_POST['token'] : '';
  //============================================================================



  if ($token != "") {   //Get token and save to SESSION
    echo ($localToken = substr(time(),-5));
    session_start();
    $_SESSION['token'] = $localToken;
  } else {
    session_start();
    if ($receiveToken != $_SESSION['token']) {
      die('Err401');
    }
    include("databaseSignUp.php");
  }
  $_SESSION['Online'] = 'true';
  $_SESSION['userName'] = 'userName';
  echo "good";

 ?>
