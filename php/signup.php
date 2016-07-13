<?php

  //Initializing variables
         $token = "";
         $Email = "";
        $Passwd = "";
  $receiveToken = "";
  //Check if declared
       $token = isset($_GET['requireToken']) ? $_GET['requireToken'] : '';
       $Email = isset($_POST['email'])       ?       $_POST['email'] : '';
      $Passwd = isset($_POST['passwd'])      ?      $_POST['passwd'] : '';
$receiveToken = isset($_POST['token'])       ?       $_POST['token'] : '';



  if ($token != "") {
    echo ($localToken = substr(time(),-5));
  } else {
    # code...
  }
 ?>
