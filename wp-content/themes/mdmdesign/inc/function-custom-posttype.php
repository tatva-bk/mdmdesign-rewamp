<?php
/**
 * Functions which create Custom Post types into WordPress
 *
 * @package drivetrain
 */


/**
 *  Function to add create new custom post types
 */
add_action('init', 'mdmdesign_create_post_type');
function mdmdesign_create_post_type()
{

    $support = array('title', 'thumbnail','author','editor','excerpt');
    mdmdesign_generate_post_type('Project', 0, $support, 'project', ['menu_icon' => 'dashicons-admin-post']);
    mdmdesign_generate_post_taxonomy('Projects Category', 1, 'project', 'projects-category');
}

/**
 *  Function to generate custom post
 */
function mdmdesign_generate_post_type($string, $flag = 0, $support = '', $slug = '', $extra = array())
{

    $singular = ucwords($string);
    $plural = $singular;
    if ($flag == 0) {
        $plural = $singular . "s";
    } else if ($flag == 1) {
        $plural = rtrim($singular, "y") . "ies";
    } else if ($flag == 2) {
        $plural = $singular . "es";
    } else if ($flag == 3) {
        $plural = $singular;
    }

    if ($support == '') {
        $support = array('title', 'editor', 'thumbnail', 'revisions', 'author', 'excerpt');
    }
    $labels = array(
        'name' => _x($plural, $string),
        'singular_name' => _x($singular, $string),
        'add_new' => _x('Add New', $string),
        'add_new_item' => _x('Add New ' . $singular, $string),
        'edit_item' => _x('Edit ' . $singular, $string),
        'new_item' => _x('New ' . $singular, $string),
        'view_item' => _x('View ' . $plural, $string),
        'search_items' => _x('Search ' . $plural, $string),
        'not_found' => _x('No ' . $plural . ' found', $string),
        'not_found_in_trash' => _x('No ' . $plural . ' found in Trash', $string),
        'parent_item_colon' => _x('Parent ' . $singular . ':', $string),
        'menu_name' => _x($plural, $singular),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Allows the user to create ' . $plural,
        'supports' => $support,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'show_in_rest' => true
    );
    if (!empty($extra)) {
        $args = array_merge($args, $extra);
    }

    $string = ($slug != '') ? $slug : $string;
    register_post_type($string, $args);
}

/**
 *  Function to generate custom Taxonomy
 */

function mdmdesign_generate_post_taxonomy($string, $flag = 0, $category = '', $slug = '')
{
	$singular = ucwords($string);
    $plural = $singular;
    if ($flag == 0) {
        $plural = $singular . "s";
    } else if ($flag == 1) {
        $plural = rtrim($singular, "y") . "ies";
    } else if ($flag == 2) {
        $plural = $singular . "es";
    } else if ($flag == 3) {
        $plural = $singular;
    }

    // if ($support == '') {
    //     $support = array('title', 'editor', 'thumbnail', 'revisions', 'author', 'excerpt');
    // }
    $menu_slug = ($slug != '') ? $slug : $string;
    $labels = array(
        'name' => _x($plural, $string),
        'singular_name' => _x($singular, $string),
        'add_new' => _x('Add New', $string),
        'add_new_item' => _x('Add New ' . $singular, $string),
        'edit_item' => _x('Edit ' . $singular, $string),
        'update_item' => _x('Update ' . $singular, $string),
        'new_item' => _x('New ' . $singular, $string),
        'view_item' => _x('View ' . $plural, $string),
        'all_items' => _x('All ' . $plural, $string),
        'new_item_name' => _x('New ' . $plural, $string),
        'search_items' => _x('Search ' . $plural, $string),
        'add_or_remove_items' => _x('Add or remove' . $plural, $string),
        'choose_from_most_used' => _x('Choose from the most used' . $plural, $string),
        'menu_name' => _x($plural, $singular),
    );
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array('slug' => $menu_slug),
	);

	register_taxonomy($menu_slug, [$category], $args);
}