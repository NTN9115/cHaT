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

var resposeList = {
  "400": "This Email is been used",
  "402": "Error request,please contact administrator",
  "403": "Warring: man-in-the-middle-attach",
  "405": "Email and password doesn't match"
}

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
      $('#errorHint').collapse("hide");
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

        switch (data) {
          case "200":
            console.log("login success");
            break;
          default:
            $('#errorHint #errorMessage').text(resposeList[data]);
            $('#errorHint').collapse("show");
        }
      });
    }
  });
});
