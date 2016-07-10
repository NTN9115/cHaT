var i = 0;
$(document).ready(function(){
  $("input[type=button]").click(function(){
    showOnContent();
  });
  $(".chatRoomBody").submit(function(){
    showOnContent();
    event.preventDefault();
  })
});

function showOnContent() {
  var date = moment().format('h:mm:ss a');
  $("#chatContent").append(date + "\t" + $("input[type = text]").val()+"\n");
  $('#chatContent').scrollTop($('#chatContent')[0].scrollHeight);
  $("input[type = text]").focus().val("");
  i++;
}
