<?php
/**
 * Custom functions specific to the skin
 *
 * @package Themify Ultra
 */

/**
 * Load Google web fonts required for the skin
 *
 * @since 1.4.9
 * @return array
 */
function themify_theme_fashion_google_fonts( $fonts ) {
	if ( 'off' !== _x( 'on', 'Muli font: on or off', 'themify' ) ) {
		$fonts['muli'] = 'Muli:300,300i,400,400i,600,600i,700,700i';
	}
	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'themify' ) ) {
		$fonts['playfair-display'] = 'Playfair+Display:400,400i,700,700i,900,900i';
	}
	return $fonts;
}
add_filter( 'themify_google_fonts', 'themify_theme_fashion_google_fonts' );