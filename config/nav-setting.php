<?php
/**
 * Intern Exam.
 *
 * This file adds nav setting to the Intern Exam Theme.
 *
 * @package Intern Exam
 * @author  Rijon Ahmed 
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

 // Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}


 //add_action( 'genesis_before_header', 'learning_account_menu' );

function learning_account_menu (){
	wp_nav_menu( 
		array(
	'theme_location'  => 'account',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => 'menu-{menu slug}-container',
	'container_id'    => '',
	'menu_class'      => 'menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>',
	'depth'           => 0,
	'walker'          =>''

		 ) );

}
