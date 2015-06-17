$(function(){
	//your jQuery here
});

$('a.menuIcon').on('click', function(){
	$('.toggleNav').toggleClass('appear');
	$('.main').toggleClass('showMenu');
	// $('footer').toggleClass('showMenu');
	// $('h1 a.title').toggleClass('showMenu');
});