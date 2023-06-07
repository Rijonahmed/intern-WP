<?php
/**
 * Intern Exam.
 *
 * This file adds functions to the Intern Exam Theme.
 *
 * @package Intern Exam
 * @author  Rijon Ahmed 
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

 // Starts the engine.
require_once get_template_directory() . '/lib/init.php';

// Sets up the Theme.
require_once get_stylesheet_directory() . '/lib/theme-defaults.php';

// Adds helper functions.
require_once get_stylesheet_directory() . '/lib/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once get_stylesheet_directory() . '/lib/customize.php';

// Includes Customizer CSS.
require_once get_stylesheet_directory() . '/lib/output.php';

// Adds WooCommerce support.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once get_stylesheet_directory() . '/lib/woocommerce/woocommerce-notice.php';


// Theme customisation files 
require_once get_stylesheet_directory() . '/config/theme-setting.php';

// Theme widget files 
require_once get_stylesheet_directory() . '/inc/widget/site-widget.php';

//Theme menu files 
require_once get_stylesheet_directory() . '/inc/menu/menu_register.php';


//widget file
require_once get_stylesheet_directory() . '/inc/widget/widget.php';





//filter-able-portfolio-register file
require_once get_stylesheet_directory() . '/inc/filter-able-portfolio-register.php';

//filter-able-portfolio
require_once get_stylesheet_directory() . '/inc/filter-able-portfolio.php';

//welcome-to-fusion
require_once get_stylesheet_directory() . '/inc/welcome-to-fusion.php';






