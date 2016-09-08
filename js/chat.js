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
});
