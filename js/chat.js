var User2Name; //Who is talking to.

$(function(){
  viewChanger();
  $(window).resize(function(){
    viewChanger();
  });

  $('.chatFormFocuse button[name=Send]').click(function() {
    event.preventDefault();
    sendChat();
  });
  $('.chatFormFocuse #inputForm').submit(function() {
    event.preventDefault();
    sendChat();
  });


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
