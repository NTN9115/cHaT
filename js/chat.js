$(document).ready(function() {
  less.pageLoadFinished.then(
    function() {
      $('#headFunction').height($('#headFunction').width());
    }
  );
});
