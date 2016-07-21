var User2Name; //Who is talking to.

$(function(){

  //After frame loaded,Ajax from server for chatList&contactList
  receiveChatList();
  //============================================================================

  //Change Form size
  viewChanger();
  $(window).resize(function(){
    viewChanger();
  });
  //============================================================================


  //Choose chat object
  $('.chatList li a').click(function(event) {
    $('.chatListFocuse').removeClass('chatListFocuse');
    $(this).addClass('chatListFocuse');
    User2Name = $(this).attr('userID');
    event.preventDefault();
  });
  //============================================================================

  //submit chat
  $('.chatFormFocuse button[name=Send]').click(function(event) {
    event.preventDefault();
    sendChat();
  });
  $('.chatFormFocuse #inputForm').submit(function() {
    event.preventDefault();
    sendChat();
  });
  //============================================================================


});

function showChatForm() {
  //Click list to choose chat object
}

function sendChat() {
  $.post('/chat/chatBody.php',{chatContent: $('.chatFormFocuse textarea').val(), to: User2Name}, function(data, textStatus, xhr) {
    /*optional stuff to do after success */
  });
}

function receiveChat() {
  //Use setTimeIntervel to pull chat from server
}

function receiveChatList() {
  //every 2s pull chat list form server
  $.post('/chat/chatBody.php', requestChatList: 'requestChatList', function(data, textStatus, xhr) {

  },json);
}

function addFriend() {
  //Add friend
}

function viewChanger() {
  //Set form suitable
  $('#list').css("height",($(window).height() - 50 )+"px");
  $('#chatContainer').css("height",($(window).height() - 50 )+"px");
}
