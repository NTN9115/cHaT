<?php
  // session_start();
  set_include_path('/var/www/html/');
  set_include_path('/Library/WebServer/Documents');
  // Check if online
  // if ($_SESSION['Online'] != true) {
  //   exit("403");
  // }
  // session_write_close();
  //=============================================================================

  //Test information
  // $ID = 1;
  //=============================================================================

?>
<!--
  1.use session to check if online
    1.2 if offling ,jump to login pager
  2.blender page

 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>cHaT</title>
  <link rel="stylesheet/less" type="text/css" href="/css/chat.less" charset="utf-8">
  <script src="//cdn.bootcss.com/less.js/3.0.0-pre.3/less.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2">
        <div id="headFunction">
          <div class="functionButton text-center">
            <button type="button" name="chatListButton"><span class="glyphicon glyphicon-edit"></span></button>
            <button type="button" name="friendsListButton"><span class="glyphicon glyphicon-user"></span></button>
          </div>
          <img src="/img/yudachi.jpg" alt="avator" />
        </div>
        <div id="chatListContainer">
          chatListContainerHolder
        </div>
        <div id="friendsListContainer">

        </div>
      </div>
      <div class="col-lg-10">
        <header>
          <p class="text-right">
            Minamiya Natsuki
            <img src="/img/avator.jpg" alt="" />
          </p>
        </header>
      </div>
    </div>
  </div>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/js/chat.js" charset="utf-8"></script>
</body>
</html>
