$(function() {

  $(document).on({
    "mouseenter": function() {
      $('.l-header_logout').stop().fadeIn(0);
    },
    "mouseleave": function() {
      $('.l-header_logout').stop().fadeOut(0);
    }
  }, ".l-header_inner_login");

});
