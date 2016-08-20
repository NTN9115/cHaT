<?php
 session_start();
 if ($_SESSION['Online'] != true) {
   //Jump to login
   exit("OffLine");
 }
 ?>
