$.extend({
  urlparam: function(target) {
    var reg = new RegExp("(^|&)" + target + "=([^&]*)(&|$)");
    var result = window.location.search.substr(1).match(reg);
    if (result != null) {
      return unescape(result[2]);
    }
    return null;
  }
});

$(document).ready(function() {
  if ($.urlparam('target') != "signin") {
    $('.actionForm').collapse('toggle');
    $('.btn-block').toggleClass('folded');
  }
  $('.btn-block').click(function(event) {
    event.preventDefault();
    if ($(this).hasClass('folded')) {
      $('.actionForm').collapse('toggle');
      $('.btn-block').toggleClass('folded');
    }else {
      var token = "";

      $.ajax({
        url: '/userAction/auth.php',
        type: 'GET',
        dataType: 'html',
        data: {"flag" :"requestToken"},
        async: false,
      })
      .done(function(data) {
        console.log(token = data);
        $('input[name=token]').val(token);
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });

      console.log($(this).parent().serialize());
      $.post('/userAction/auth.php', $(this).parent().serialize(), function(data, textStatus, xhr) {
        console.log(data);
      });
    }
  });
});
