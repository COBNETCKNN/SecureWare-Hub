document.addEventListener('DOMContentLoaded', function () {
  var gallery = document.getElementById('gallery');
  var viewer = new Viewer(gallery, {
    inline: false,
    viewed: function viewed() {
      viewer.zoomTo(1);
    }
  });
});
jQuery(document).ready(function (jQuery) {
  // Mobile Header Menu
  jQuery(".nav-toggler").click(function () {
    jQuery("#navigation").toggle("slide");
    jQuery('.navbar_grid__dropdown').addClass('open');
    jQuery('body').css('overflow', 'hidden');
  });
  jQuery(".nav_close__button").click(function () {
    jQuery('.navbar_grid__dropdown').removeClass('open');
    jQuery('body').css('overflow', 'auto');
  });
});
var pageLink = window.location.href;
var pageTitle = String(document.title).replace(/\&/g, '%26');
function fbs_click() {
  window.open("http://www.facebook.com/sharer.php?u=".concat(pageLink, "&quote=").concat(pageTitle), 'sharer', 'toolbar=0,status=0,width=626,height=436');
  return false;
}
function tbs_click() {
  window.open("https://twitter.com/intent/tweet?text=".concat(pageTitle, "&url=").concat(pageLink), 'sharer', 'toolbar=0,status=0,width=626,height=436');
  return false;
}
function lbs_click() {
  window.open("https://www.linkedin.com/sharing/share-offsite/?url=".concat(pageLink), 'sharer', 'toolbar=0,status=0,width=626,height=436');
  return false;
}
function rbs_click() {
  window.open("https://www.reddit.com/submit?url=".concat(pageLink), 'sharer', 'toolbar=0,status=0,width=626,height=436');
  return false;
}
function pbs_click() {
  window.open("https://www.pinterest.com/pin/create/button/?&text=".concat(pageTitle, "&url=").concat(pageLink, "&description=").concat(pageTitle), 'sharer', 'toolbar=0,status=0,width=626,height=436');
  return false;
}
