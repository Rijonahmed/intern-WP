<?php

function create_porfolio_function(){
    $labels = array(
        'name' => _x('Portfolios', 'post type general name', 'your_text_domain'),
        'singular_name' => _x('Portfolio', 'post type Singular name', 'your_text_domain'),
        'add_new' => _x('Add Portfolio', '', 'your_text_domain'),
        'add_new_item' => __('Add New Portfolio', 'your_text_domain'),
        'edit_item' => __('Edit Portfolio', 'your_text_domain'),
        'new_item' => __('New Portfolio', 'your_text_domain'),
        'all_items' => __('All Portfolios', 'your_text_domain'),
        'view_item' => __('View Portfolios', 'your_text_domain'),
        'search_items' => __('Search Portfolio', 'your_text_domain'),
        'not_found' => __('No Portfolio found', 'your_text_domain'),
        'not_found_in_trash' => __('No Portfolio on trash', 'your_text_domain'),
        'parent_item_colon' => '',
        'menu_name' => __('Portfolios', 'your_text_domain')
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio'),
        'capability_type' => 'page',
        'has_archive' => true,
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-format-gallery',
        'supports' => array('title', 'thumbnail')
    );
    $labels = array(
        'name' => __('Category'),
        'singular_name' => __('Category'),
        'search_items' => __('Search'),
        'popular_items' => __('More Used'),
        'all_items' => __('All Categories'),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __('Add new'),
        'update_item' => __('Update'),
        'add_new_item' => __('Add new Category'),
        'new_item_name' => __('New')
    );
    register_taxonomy('porfiolio_category', array('portfolio'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'singular_label' => 'porfiolio_category',
		'all_items' => 'Category',
		'query_var' => true,
		'rewrite' => array('slug' => 'cat'))
    );
    register_post_type('portfolio', $args);
    flush_rewrite_rules();
}
add_action('init', 'create_porfolio_function');