<!--
  1.use session to check if online
    1.2 if offling ,jump to login pager
  2.blender page

 -->
<?php
 session_start();
 if ($_SESSION['Online'] != true) {
   header("Location: /userAction/login.php");
   exit("OffLine");
 }

 ?>
