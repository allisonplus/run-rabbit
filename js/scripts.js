$(function(){
	//your jQuery here
});


$(document).ready(function() {

  //Calculate height
  var totalHeight =$('.hero').outerHeight();

  $(window).scroll(function() {
    //if scrolled down more than the height of hero + stats
    if ($(window).scrollTop() > totalHeight) {

      $('nav').css({
          "width": "100%",
          "z-index": "100",
          "position": "fixed",
          "top": "0"
        });
      $('ul.menu li:first-child').css({
          "display":"flex"
      });

      } else {
      // resetting nav when scrolled up
      $('nav').css({
          "position": "initial"
        });
      $('ul.menu li:first-child').css({
          "display":"none"
      });
    }; //end else statement
  }); //end scroll function
}) //end document ready