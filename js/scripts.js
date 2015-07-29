
// If nav isn't on the main page but it needs to scroll, I still need the first child to be display flex


//Sticky Nav
$(document).ready(function() {

  //Calculate height
  var totalHeight =$('.hero').outerHeight();

  $(window).scroll(function() {
    //if scrolled down more than the height of hero + stats
    if ($(window).scrollTop() > totalHeight) {
      $('nav').addClass('sticky');
      $('ul.menu li:first-child').css({
          "display":"flex"
      });

      } else {
      // resetting nav when scrolled up
      $('nav').removeClass('sticky');
      $('ul.menu li:first-child').css({
          "display":"none"
      });
    }; //end else statement
  }); //end scroll function
}) //end document ready

// Nav Showing Logo + Home Link On Non-Home Pages
$(function(){
  if ($("body").hasClass("home")){
      // nav will act proper
    } else {
      $('ul.menu li:first-child').css({
          "display":"flex"
      });
    }
});