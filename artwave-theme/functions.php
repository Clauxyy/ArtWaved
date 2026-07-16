<?php
/**
 * ArtWave theme functions.
 *
 * @package ArtWave
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'artwave_setup' ) ) {
	/**
	 * Basic theme setup.
	 */
	function artwave_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 40,
				'width'       => 160,
				'flex-height' => true,
				'flex-width'  => true,
			)
		);

		register_nav_menus(
			array(
				'primary' => __( 'Primary Menu', 'artwave' ),
				'footer'  => __( 'Footer Menu', 'artwave' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'artwave_setup' );

/**
 * Enqueue styles and scripts.
 */
function artwave_assets() {
	// Google Fonts: Playfair Display (headings) + Jost (body).
	wp_enqueue_style(
		'artwave-fonts',
		'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Jost:wght@300;400;500;600&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'artwave-style',
		get_stylesheet_uri(),
		array( 'artwave-fonts' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'artwave-main',
		get_template_directory_uri() . '/js/main.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'artwave_assets' );

/**
 * Fallback menu used when no menu is assigned to the "primary" location.
 */
function artwave_default_menu() {
	$items = array(
		'#servicii'    => __( 'Servicii', 'artwave' ),
		'#despre'      => __( 'Despre', 'artwave' ),
		'#portofoliu'  => __( 'Portofoliu', 'artwave' ),
		'#contact'     => __( 'Contact', 'artwave' ),
	);
	echo '<ul id="aw-primary-menu">';
	foreach ( $items as $url => $label ) {
		printf( '<li><a href="%s">%s</a></li>', esc_attr( $url ), esc_html( $label ) );
	}
	echo '</ul>';
}
