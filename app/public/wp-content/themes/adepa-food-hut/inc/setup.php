<?php
/*
 * Theme supports, assets and editor integration.
 *
 * @package ADEPA_Food_Hut
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register theme supports and editor styles.
 *
 * @return void
 */
function adepa_theme_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );

	add_editor_style(
		array(
			'assets/css/main.css',
			'assets/css/editor.css',
			'assets/css/motion.css',
		)
	);
}
add_action( 'after_setup_theme', 'adepa_theme_setup' );

/**
 * Enqueue the public stylesheet and the small interaction script.
 *
 * @return void
 */
function adepa_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'adepa-main',
		get_theme_file_uri( 'assets/css/main.css' ),
		array(),
		$version
	);

	wp_enqueue_style(
		'adepa-motion',
		get_theme_file_uri( 'assets/css/motion.css' ),
		array( 'adepa-main' ),
		$version
	);

	wp_enqueue_script(
		'adepa-site',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-motion-core',
		get_theme_file_uri( 'assets/js/motion/motion-core.js' ),
		array(),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-hero-rotation',
		get_theme_file_uri( 'assets/js/motion/hero-rotation.js' ),
		array( 'adepa-motion-core' ),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-dish-carousel',
		get_theme_file_uri( 'assets/js/motion/dish-carousel.js' ),
		array( 'adepa-motion-core' ),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-scroll-reveal',
		get_theme_file_uri( 'assets/js/motion/scroll-reveal.js' ),
		array( 'adepa-motion-core' ),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-announcement-ticker',
		get_theme_file_uri( 'assets/js/motion/announcement-ticker.js' ),
		array( 'adepa-motion-core' ),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);

	wp_enqueue_script(
		'adepa-motion-init',
		get_theme_file_uri( 'assets/js/motion/motion-init.js' ),
		array( 'adepa-motion-core', 'adepa-hero-rotation', 'adepa-dish-carousel', 'adepa-scroll-reveal', 'adepa-announcement-ticker', 'adepa-site' ),
		$version,
		array(
			'in_footer' => true,
			'strategy'  => 'defer',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'adepa_enqueue_assets' );

/**
 * Preload the two self-hosted variable fonts to protect the hero LCP.
 *
 * @return void
 */
function adepa_preload_fonts() {
	$fonts = array(
		'assets/fonts/bricolage-groginates-latin-var.woff2',
		'assets/fonts/manrope-latin-var.woff2',
	);

	foreach ( $fonts as $font ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( get_theme_file_uri( $font ) )
		);
	}
}
add_action( 'wp_head', 'adepa_preload_fonts', 1 );

/**
 * Register the ADEPA pattern category so sections are grouped in the editor.
 *
 * @return void
 */
function adepa_register_pattern_categories() {
	if ( ! function_exists( 'register_block_pattern_category' ) ) {
		return;
	}

	register_block_pattern_category(
		'adepa',
		array(
			'label'       => __( 'ADEPA Food Hut', 'adepa-food-hut' ),
			'description' => __( 'Editorial sections and page patterns for the ADEPA public website.', 'adepa-food-hut' ),
		)
	);
}
add_action( 'init', 'adepa_register_pattern_categories' );

/**
 * Add a scoping class so component styles do not leak into plugins or admin UI.
 *
 * @param string[] $classes Body classes.
 * @return string[]
 */
function adepa_body_classes( $classes ) {
	$classes[] = 'adepa-site';

	return $classes;
}
add_filter( 'body_class', 'adepa_body_classes' );