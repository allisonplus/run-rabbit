$(function(){
	//your jQuery here
});

// $('a.menuIcon').on('click', function(){
// 	// $('a.menuIcon').css('color', 'white');
// 	$('.toggleNav').toggleClass('appear');
// 	$('.main').toggleClass('showMenu');
// 	$('footer').toggleClass('showMenu');
// 	$('h1 a.title').toggleClass('showMenu');
// });


$(document).ready(function() {

  //Calculate height
  var totalHeight =$('header h1').outerHeight();

  $(window).scroll(function() {
    //if scrolled down more than the height of hero + stats
    if ($(window).scrollTop() > totalHeight) {
    	console.log("bam!");

      $('.nav').css({
            "width": "100%",
            "z-index": "100",
            "position": "fixed",
            "top": "0"
          });

      } else {
      // resetting nav when scrolled up
      $('.nav').css({
          "position": "initial"
        });
    };
  });
})