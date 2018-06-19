/**
 * File carousel.js
 *
 * Functionality for testimonials: https://flickity.metafizzy.co
 */

// Selector for specific/individual section.
var portfolio = document.querySelector( '.image-gallery' );

// Conditional if element exists.
	if (portfolio != null) {
	var portfolioSingle = new Flickity( portfolio, {
		// Options.
		cellAlign: 'center',
		imagesLoaded: true,
	});
}
