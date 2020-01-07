$(document).ready(function () {
  $(".gallery-img").click(function(){
    var t = $(this).attr("src");

    openInNewTab(t)
  });
});

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}