$(function(){
	//your jQuery here
});

$('a.menuIcon').on('click', function(){
	// $('a.menuIcon').css('color', 'white');
	$('.toggleNav').toggleClass('appear');
	$('.main').toggleClass('showMenu');
	$('footer').toggleClass('showMenu');
	$('h1 a.title').toggleClass('showMenu');
});
