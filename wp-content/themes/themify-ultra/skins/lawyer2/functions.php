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
function themify_theme_lawyer2_google_fonts( $fonts ){
	/* translators: If there are characters in your language that are not supported by this font, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins: on or off', 'themify' ) ) {
		$fonts['poppins'] = 'Poppins:400,400i,700,700i';
	}
	if ( 'off' !== _x( 'on', 'DM Serif Display: on or off', 'themify' ) ) {
		$fonts['DM+Serif+Display'] = 'DM+Serif+Display:400,400i';
	}
	return $fonts;
}
add_filter( 'themify_theme_google_fonts', 'themify_theme_lawyer2_google_fonts' );