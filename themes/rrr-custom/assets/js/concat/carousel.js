/**
 * File carousel.js
 *
 * Functionality for testimonials: https://flickity.metafizzy.co
 */

// Selector for featured image.
var featIMG = document.querySelector( '.carousel-main' );

// Selector for specific/individual section.
var portfolio = document.querySelector( '.portfolio-nav .image-gallery' );

// Conditional if element exists.
if (featIMG != null) {
	var featuredImage = new Flickity( featIMG, {
		// Options.
		cellAlign: 'center',
		imagesLoaded: true,
		prevNextButtons: false,
		pageDots: false
	});
}

// Conditional if element exists.
if (portfolio != null) {
	var portfolioSingle = new Flickity( portfolio, {
		// Options.
		asNavFor: '.carousel-main',
		imagesLoaded: true,
		contain: true,
		prevNextButtons: false,
		pageDots: false
	});
}
