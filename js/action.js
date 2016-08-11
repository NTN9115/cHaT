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

  }
  });
});
