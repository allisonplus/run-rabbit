
//Sticky Nav
$(document).ready(function() {
  if ($("body").hasClass("home")){

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
    }); //end window scroll function  

  } else {
    $('nav').addClass('sticky');
    $('ul.menu li:first-child').css({
        "display":"flex"
    });
  } //end else statement
}); //end function