<?php

// Auth
session_start();
$_SESSION['test'] = "test";
$_SESSION['userID'] = 1;
// if ($_SESSION['Online'] != 'true') {
//   header('Location: /chat/hellouser/signin.html');
//   exit();
// }
//==============================================================================

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>cHaT</title>

  <!-- icon set -->
    <link rel="apple-touch-icon" sizes="180x180" href="/chat/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/chat/icon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/chat/icon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/chat/icon/manifest.json">
    <link rel="mask-icon" href="/chat/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
  <!-- ===================================================================== -->

  <link rel="stylesheet" href="/chat/css/bootstrap.min.css">
  <link rel="stylesheet/less" type="text/css" href="/chat/css/mainbody.less">
  <script src="/chat/js/less.min.js" charset="utf-8"></script>
</head>
<body>

  <header>
    <div id="headerContact">
      <a href="#" name="chatList"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
      <a href="#" name="contactList"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
    </div>

    <div id="headerChat">
      <h3 class="headerUser2Name">cHaT with Bob</h3>
      <img src="/chat/design/Person_241px_1198581_easyicon.net.png" alt="" class="headerAvator">
    </div>
  </header>

  <!-- Left Side Bar -->
  <div id="list">
    <div class="chatListHolder">
      <ul class="chatList">
        <li id="chatList_20"><a href="" class="chatListFocuse ">
          <img src="/chat/design/Person_241px_1198581_easyicon.net.png" alt="" class="avator">
          <h5 class="user2Name">Bob</h5>
          <p class="glimpTime">now</p>
          <p class="glimp">Hellow,Are you there...</p>
        </a></li>
        <li id="chatList_21"><a href="">
          <img src="/chat/design/Person_241px_1198581_easyicon.net.png" alt="" class="avator">
          <h5 class="user2Name">Jone</h5>
          <p class="glimpTime">1 min</p>
          <p class="glimp">Do you wanna have ...</p>
        </a></li>
        <li id="chatList_22"><a href="">
          <img src="/chat/design/Person_241px_1198581_easyicon.net.png" alt="" class="avator">
          <h5 class="user2Name">Natsuki</h5>
          <p class="glimpTime">1 hour</p>
          <p class="glimp">Oops,my watch was ...</p>
        </a></li>
        <li id="chatList_23"><a href="">
          <img src="/chat/design/Person_241px_1198581_easyicon.net.png" alt="" class="avator">
          <h5 class="user2Name">YukihiraType2</h5>
          <p class="glimpTime">yesterday</p>
          <p class="glimp">Swetty,shall we have ...</p>
        </a></li>

      </ul>
    </div>

    <div class="contactListHolder">
      <ul class="contactList">
        <li><a href="">contact1</a></li>
        <li><a href="">contact2</a></li>
        <li><a href="">contact3</a></li>
        <li><a href="">contact4</a></li>
      </ul>
    </div>
  </div>
  <!-- ===================================================================== -->


  <div id="chatContainer">

    <!-- chatForm -->
    <div id="chatForm" class="Form20 chatFormFocuse" userID="202">
      <div id="chatFormWindow">
        <p class="friendChats Chats">Hellow,Are you there?</p>
        <p class="myChats Chats">Umm,Nope.</p>
        <p class="timeStamp text-center">1 min ago</p>
        <p class="friendChats Chats">Why aren't you there</p>
        <p class="myChats Chats">Cause I'm busy now</p>

      </div>
      <div id="inputWindow">
        <form id="inputForm">
          <textarea name="inputArea"></textarea>
          <button type="button" name="upLoadPic"><span class="glyphicon glyphicon-picture" aria-hidden="true"></button>
          <button type="button" name="upLoadFile"><span class="glyphicon glyphicon-open-file" aria-hidden="true"></button>
          <button type="submit" name="Send">Send</button>
        </form>
      </div>
    </div>
    <!-- =================================================================== -->

  </div>

  <script src="/chat/js/jQuery.js" charset="utf-8"></script>
  <script src="/chat/js/moment.js" charset="utf-8"></script>
  <script src="/chat/js/chat.js" charset="utf-8"></script>
</body>
</html>
