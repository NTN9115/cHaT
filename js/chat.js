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
      $('#headDropDownHolder').animate({top:"70px",opacity:"1"}, 100)
    });
});
