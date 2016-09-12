$(document).ready(function() {
    //WindowControl

    //WindowControl.FriednList
    $('li[data-groupname]').click(function(event) {
      if ($(this).hasClass('collapsed')) {
        $(this).children('span').addClass('rotateSpan');
        $(this).children('span').removeClass('rotateSpanBack');
      }else {
        $(this).children('span').addClass('rotateSpanBack');
        $(this).children('span').removeClass('rotateSpan');
      }
    });

    //WindowControl.headDropDown
    $('#chatHeader').children('p').mouseenter(function(event) {
      // $('#headDropDownHolder').slideToggle(200);
      $('#headDropDownHolder').css('display', 'block');
      $('#headDropDownHolder').animate({top:"69px",opacity:"1"}, 100);
      $('#headDropDownHolder').mouseleave(function(event) {
        if (!$('#headDropDownHolder').is(":animated")) {
          $('#headDropDownHolder').animate({top:"60px",opacity:"0"}, 100);
          setTimeout(function(){
            $('#headDropDownHolder').css('display', 'none');
          },110)
        }
      });
    });

    //Window.SideList
    $('button[name=chatListButton]').click(function(event) {
      $('#chatListContainer').removeClass('templete');
      $('#friendsListContainer').addClass('templete')
    });
    $('button[name=friendsListButton]').click(function(event) {
      $('#chatListContainer').addClass('templete');
      $('#friendsListContainer').removeClass('templete')
    });
});
