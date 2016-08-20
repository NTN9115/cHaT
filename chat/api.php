<?php
 session_start();
 if ($_SESSION['Online'] != true) {
   exit("403");
 }
 $flag = $POST['flag'];
 $queryEmail = $POST['qEmail'];
 $queryName = $POST['qName'];

 
 ?>
