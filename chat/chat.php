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
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="holder">
          <div id="headFunction">
            <div class="functionButton ">
              <button type="button" name="chatListButton"><span class="glyphicon glyphicon-edit"></span></button>
              <button type="button" name="friendsListButton"><span class="glyphicon glyphicon-user"></span></button>
            </div>
            <div id="chatListFunctionContainer" class="">
              <img src="/img/yudachi.jpg" alt="avator" />
              <button type="button" name="closeChatTarget"><span class="glyphicon glyphicon-remove"></span></button>
              <p id="chatTargetName">Yudachi</p>
            </div>
            <div id="friendsListFunctionContainer" class="">

            </div>
          </div>
        </div>

        <div id="chatListContainer" class="">
          <div class="chatListUnit " data-UserID="13">
            <img src="/img/ryujo.png" alt="" />
            <h4>Ryujo</h4>
            <p class="time">now</p>
            <p class="glimp">
              Hi,Welcome to...
            </p>
          </div>

        </div>

        <div id="friendsListContainer" class="templete">
          <ul id="group">
            <li class="collapsed" data-groupname="Friends" data-toggle="collapse" data-target="#Friends">
              <span class="glyphicon glyphicon-chevron-right "></span>Friends
           </li>
           <ul class="collapse" id="Friends">
             <li><img src="/img/ryujo.png" alt="" />Ryujo</li>
             <li><img src="/img/avator.jpg" alt="" />Kaga</li>
           </ul>
            <li class="collapsed" data-groupname="Destroyer" data-toggle="collapse" data-target="#Destroyer">
              <span class="glyphicon glyphicon-chevron-right "></span>Destroyer
            </li>
            <ul class="collapse" id="Destroyer">
              <li><img src="" alt="" />Kamikaze</li>
            </ul>
            <li data-groupname="Aircraft Carrier">
              <span class="glyphicon glyphicon-chevron-right "></span>Aircraft Carrier
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-10 col-md-9 col-sm-8">
        <div id="chatHeader">
          <p class="">
            Minamiya Natsuki
            <img src="/img/avator.jpg" alt="" />
          </p>

          <div id="headDropDownHolder">
            <div id="headDropDown">
              <img id="headDropDownTrangle" src="/img/trangle.png" alt="" />
              cHaT
              <div id="headDropDownFunction">
                <ul>
                  <li><span class="glyphicon glyphicon-user"></span>Personal Setting</li>
                  <li><span class="glyphicon glyphicon-edit"></span>Feedback</li>
                </ul>
                <button type="button" name="setting"><span class="glyphicon glyphicon-cog"></span></button>
                <button type="button" name="setting"><span class="glyphicon glyphicon-off"></span></button>
              </div>
            </div>
          </div>
        </div>
            <div class="row">
              <div class="col-lg-7 col-md-7">
                <div class="chatFormContainer ">
                  <div class="chatForm">
                    <div class="chatContainer">
                      <div class="me"><span>Where do you wanna to go</span><img src="/img/avator.jpg" alt="" /></div>
                      <div class="you"><img src="/img/yudachi.jpg" alt="" /><span>Let's go to HongKong</span></div>
                    </div>
                    <div class="inputContainer">
                      <textarea name="chatInput" placeholder="Press Ender to send"></textarea>
                      <button><span class="glyphicon glyphicon-picture"></span></button>
                      <button><span class="glyphicon glyphicon-send"></span></button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-5">holder2</div>
            </div>
      </div>
    </div>
  </div>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="/js/chat.js" charset="utf-8"></script>
</body>
</html>
