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
      <div class="col-lg-2 col-md-3">
        <div class="holder">
          <div id="headFunction">
            <div class="functionButton ">
              <button type="button" name="chatListButton"><span class="glyphicon glyphicon-edit"></span></button>
              <button type="button" name="friendsListButton"><span class="glyphicon glyphicon-user"></span></button>
            </div>
            <img src="/img/yudachi.jpg" alt="avator" />
            <button type="button" name="closeChatTarget"><span class="glyphicon glyphicon-remove"></span></button>
            <p id="chatTargetName">Yudachi</p>
          </div>
        </div>

        <div id="chatListContainer">
          <div class="chatListUnit templete" data-UserID="13">
            <img src="/img/ryujo.png" alt="" />
            <h4>Ryujo</h4>
            <p class="time">now</p>
            <p class="glimp">
              Hi,Welcome to cHaT...
            </p>
          </div>

        </div>

        <div id="friendsListContainer">
          <ul id="group">
            <li data-groupname="Friends" data-toggle="collapse" data-target="#Friends">
              <span class="glyphicon glyphicon-chevron-right rotateSpan"></span>Friends
           </li>
           <ul class="collapse in" id="Friends">
             <li><img src="/img/ryujo.png" alt="" />Ryujo</li>
             <li><img src="/img/avator.jpg" alt="" />Kaga</li>
           </ul>
            <li data-groupname="Destroyer">
              <span class="glyphicon glyphicon-chevron-right "></span>Destroyer
            </li>
            <li data-groupname="Aircraft Carrier">
              <span class="glyphicon glyphicon-chevron-right "></span>Aircraft Carrier
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-10 col-md-9">
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
