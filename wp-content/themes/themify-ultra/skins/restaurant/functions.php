<?php
/**
 * Custom functions specific to the Restaurant skin
 *
 * @package Themify Ultra
 */

/**
 * Load Google web fonts required for the Restaurant skin
 *
 * @since 1.4.9
 * @return array
 */
function themify_theme_restaurant_google_fonts( $fonts ) {
	/* translators: If there are characters in your language that are not supported by Cabin, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Cabin font: on or off', 'themify' ) ) {
		$fonts['cabin'] = 'Cabin:400,400i,600,600i,700,700i';
	}
	/* translators: If there are characters in your language that are not supported by Source Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Source Sans font: on or off', 'themify' ) ) {
		$fonts['source-sans'] = 'Source+Sans+Pro:400,700,900';
	}
	/* translators: If there are characters in your language that are not supported by Playfair Display, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Playfair Display font: on or off', 'themify' ) ) {
		$fonts['playfair-display'] = 'Playfair+Display:400,400i,700,700i,900,900i';
	}

	return $fonts;
}
add_filter( 'themify_google_fonts', 'themify_theme_restaurant_google_fonts' );

/**
 * Add fancy heading styles to page titles
 *
 * @since 1.1
 */
function themify_theme_restaurant_page_title( $args ) {
	if ( in_array( $args['tag'], array( 'h1', 'h2' ) ) ) {
		$args['class'] .= ' fancy-heading';
		$args['before_title'] = '
			<span class="maketable">
				<span class="addBorder"></span>
				<span class="fork-icon"></span>
				<span class="addBorder"></span>
			</span>';
		$args['after_title'] = '<span class="bottomBorder"></span>';
	}

	return $args;
}
add_filter( 'themify_after_page_title_parse_args', 'themify_theme_restaurant_page_title' );

/**
 * Add fancy heading styles to post titles
 *
 * @since 1.1
 */
function themify_theme_restaurant_post_title( $args ) {
	global $themify;
	if ( ( isset( $themify->post_layout ) && $themify->post_layout === 'list-post' ) || ( is_singular() && $args['tag'] === 'h1' ) ) {
		$args=themify_theme_restaurant_page_title($args);
	}
	return $args;
}
add_filter( 'themify_post_title_args', 'themify_theme_restaurant_post_title' );

/**
 * Add fancy heading styles to Fancy Heading module
 */
function themify_theme_restaurant_fancy_heading_template( $args, $slug = '' ) {
	/* when using custom icon, use module's template instead */
	if ( $slug !== 'fancy-heading' || ! empty( $args['mod_settings']['icon'] ) || ! empty( $args['mod_settings']['image'] ) || ! empty( $args['mod_settings']['path'] ) ) {
		return $args;
	}

	$args['mod_settings']['heading']=!empty($args['mod_settings']['heading'])?$args['mod_settings']['heading']:'';
	unset($args['mod_settings']['heading_link']);
	$args['mod_settings']['heading']=sprintf('<span class="maketable">
							<span class="addBorder"></span>
							<span class="fork-icon"></span>
							<span class="addBorder"></span>
							</span>
							%s
							<span class="bottomBorder"></span>',$args['mod_settings']['heading']);
	return $args;
}
add_filter( 'themify_builder_module_render_vars', 'themify_theme_restaurant_fancy_heading_template', 10, 2 );

/**
 * Add fancy heading styles to Fancy Heading module - Frontend Builder
 */
function themify_theme_restaurant_active_vars( $vars, $context ) {
	if ( $context === 'visual' ) {
		themify_enque_script( 'themify-restaurant-script', THEME_URI . '/skins/restaurant/js/builder.js', Themify_Enqueue_Assets::$themeVersion, [ 'themify-builder-app-js' ] );
	}

	return $vars;
}
add_action( 'themify_builder_active_vars', 'themify_theme_restaurant_active_vars', 10, 2 );
