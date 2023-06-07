<?php

/**
 * Intern Exam.
 *
 * This file adds setting to the Intern Exam Theme.
 *
 * @package Intern Exam
 * @author  Rijon Ahmed 
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Theme customisation files 
require_once get_stylesheet_directory() . '/config/load-assets.php';
require_once get_stylesheet_directory() . '/config/nav-setting.php';


add_action( 'after_setup_theme', 'genesis_sample_theme_support', 9 );
/**
 * Add desired theme supports.
 *
 * See config file at `config/theme-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_theme_support() {

	$theme_supports = genesis_get_config( 'theme-supports' );

	foreach ( $theme_supports as $feature => $args ) {
		add_theme_support( $feature, $args );
	}

}

add_action( 'after_setup_theme', 'genesis_sample_post_type_support', 9 );
/**
 * Add desired post type supports.
 *
 * See config file at `config/post-type-supports.php`.
 *
 * @since 3.0.0
 */
function genesis_sample_post_type_support() {

	$post_type_supports = genesis_get_config( 'post-type-supports' );

	foreach ( $post_type_supports as $post_type => $args ) {
		add_post_type_support( $post_type, $args );
	}

}

// Adds image sizes.
add_image_size( 'sidebar-featured', 75, 75, true );
add_image_size( 'genesis-singular-images', 702, 526, true );

// Removes header right widget area.
unregister_sidebar( 'header-right' );

// Removes secondary sidebar.
unregister_sidebar( 'sidebar-alt' );

// Removes site layouts.
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );



add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
/**
 * Modifies size of the Gravatar in the author box.
 *
 * @since 2.2.3
 *
 * @param int $size Original icon size.
 * @return int Modified icon size.
 */
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
/**
 * Modifies size of the Gravatar in the entry comments.
 *
 * @since 2.2.3
 *
 * @param array $args Gravatar settings.
 * @return array Gravatar settings with modified size.
 */
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;
	return $args;

}

// genesis footer remove
remove_action('genesis_footer' , 'genesis_do_footer');

//Theme Function
function rijon_customizar_register($wp_customize){
	$wp_customize->add_section('rijon_header_area', array(
	  'title' =>__('Header Area', 'intern-exam'),
	  'description' => 'If you interested to update your header area, you can do it here.'
	));
  
	$wp_customize->add_setting('rijon_logo', array(
	  'default' => get_bloginfo('template_directory') . '/img/logo.png',
	));
  
	$wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'rijon_logo', array(
	  'label' => 'Logo Upload',
	  'description' => 'If you interested to change or update your logo you can do it.',
	  'setting' => 'rijon_logo',
	  'section' => 'rijon_header_area',
	) ));



	// Menu Position Option
	$wp_customize->add_section('rijon_menu_option', array(
		'title' => __('Menu Position Option', 'intern-exam'),
		'description' => 'If you interested to change your menu position you can do it.'
	  ));
	
	  $wp_customize->add_setting('rijon_menu_position', array(
		'default' => 'right_menu',
	  ));
	
	  $wp_customize-> add_control('rijon_menu_position', array(
		'label' => 'Menu Position',
		'description' => 'Select your menu position',
		'setting' => 'rijon_menu_position',
		'section' => 'rijon_menu_option',
		'type' => 'radio',
		'choices' => array(
		  'left_menu' => 'Left Menu',
		  'right_menu' => 'Right Menu',
		  'center_menu' => 'Center Menu',
		),
	  ));


	    // Footer Option
  $wp_customize->add_section('rijon_footer_option', array(
    'title' => __('Footer Option', 'intern-exam'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('rijon_copyright_section', array(
    'default' => '&copy; Copyright 2023 | RIJON AHMED',
  ));

  $wp_customize-> add_control('rijon_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'rijon_copyright_section',
    'section' => 'rijon_footer_option',
  ));
  
  }
  
  add_action('customize_register', 'rijon_customizar_register');
