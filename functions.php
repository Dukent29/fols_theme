<?php
/**
 * fols-security-theme functions and definitions
 *
 * @package fols-security-theme
 */

// Theme version
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Theme setup
 */
function fols_security_theme_setup() {
	// Make theme translatable
	load_theme_textdomain( 'fols-security-theme', get_template_directory() . '/languages' );

	// Let WordPress manage the <title> tag
	add_theme_support( 'title-tag' );

	// Enable support for featured images
	add_theme_support( 'post-thumbnails' );

	// Register menu location
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'fols-security-theme' ),
	) );

	// Support for HTML5 markup
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Support for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
add_action( 'after_setup_theme', 'fols_security_theme_setup' );
function fols_register_services_cpt() {
    $labels = array(
        'name' => 'Services',
        'singular_name' => 'Service',
        'add_new' => 'Ajouter un Service',
        'add_new_item' => 'Ajouter un nouveau service',
        'edit_item' => 'Modifier le service',
        'new_item' => 'Nouveau service',
        'view_item' => 'Voir le service',
        'search_items' => 'Rechercher un service',
        'not_found' => 'Aucun service trouvé',
        'menu_name' => 'Nos Services',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-shield-alt', // Optional icon
    );

    register_post_type('service', $args);
}
add_action('init', 'fols_register_services_cpt');

function fols_security_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'presentation_bg_image' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'presentation_bg_image', array(
        'label'    => __( 'Image de fond - Section Présentation', 'fols-security-theme' ),
        'section'  => 'title_tagline',
        'settings' => 'presentation_bg_image',
    ) ) );
}
add_action( 'customize_register', 'fols_security_customize_register' );



/**
 * Enqueue theme styles
 */

// css pour le nouveau thème
function fols_security_enqueue_styles() { 
	// Main style.css
	wp_enqueue_style( 'fols-style', get_stylesheet_uri() );

	// Custom overrides
	wp_enqueue_style( 'fols-custom-style', get_template_directory_uri() . '/custom-style.css', array('fols-style'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'fols_security_enqueue_styles' );
require get_template_directory() . '/inc/template-tags.php';
