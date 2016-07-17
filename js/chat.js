$(function(){
  viewChanger();
  $(window).resize(function(){
    viewChanger();
  });

  
});

function sendChat() {
  //Use Ajax to send chat
}

function receiveChat() {
  //Use setTimeIntervel to pull chat from server
}

function reveiveChatList() {
  //every 2s pull chat list form server
}

function addFriend() {
  //Add friend
}

function viewChanger() {
  //Set form suitable
  $('#list').css("height",($(window).height() - 50 )+"px");
  $('#chatContainer').css("height",($(window).height() - 50 )+"px");
}
