window.onbeforeunload = function() {
  window.scrollTo(0, 0);
  
  window.onscroll = function() {
    if ($(this).scrollTop() > 1) {
      $('header').addClass("resize");
    } else {
      $('header').removeClass("resize");
    }
  };