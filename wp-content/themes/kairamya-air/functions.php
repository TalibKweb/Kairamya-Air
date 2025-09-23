<?php

// >>>>>>>>>>>>>>>>>>>>> Added Excerpt to Default WP Post
function add_excerpt_to_default_post() {
    add_post_type_support('post', 'excerpt');
}
add_action('init', 'add_excerpt_to_default_post');



// >>>>>>>>>>>>>>>>>>>>> Embed the SVG type media in the backend
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// >>>>>>>>>>>>>>>>>>>>> Register Menus
function aevier_register_menus() {
    register_nav_menu('primary', 'Primary Menu');
}
add_action('after_setup_theme', 'aevier_register_menus');

// >>>>>>>>>>>>>>>>>>>>>>>>>> Menu Related Code
add_filter('nav_menu_css_class', function ($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes = [$args->add_li_class]; // override
    }
    return $classes;
}, 10, 3);

add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if (isset($args->link_class)) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}, 10, 3);















// >>>>>>>>>>>>>>>>>>>>> Enable support for featured images
add_theme_support('post-thumbnails');



// >>>>>>>>>>>>>>>>> Register Aircrafts Custom Post Type
function register_aircraft_custom_post_type() {
    $labels = [
        'name'                  => 'Aircrafts',
        'singular_name'         => 'Aircraft',
        'menu_name'             => 'Aircrafts',
        'name_admin_bar'        => 'Aircraft',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Aircraft',
        'new_item'              => 'New Aircraft',
        'edit_item'             => 'Edit Aircraft',
        'view_item'             => 'View Aircraft',
        'all_items'             => 'All Aircrafts',
        'search_items'          => 'Search Aircrafts',
        'not_found'             => 'No Aircrafts found!',
        'not_found_in_trash'    => 'No Aircrafts found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
        'rewrite'            => ['slug' => 'aircrafts'], // ✅ Single post URL is /case-studies/post-name
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-airplane',
        // 'taxonomies'      => ['category'], // Uncomment if needed
    ];
    register_post_type('aircrafts', $args);
}
add_action('init', 'register_aircraft_custom_post_type');


// >>>>>>>>>>>>>>>>> Register Aircraft Tag Taxonomy
function register_aircraft_taxonomy() {
    $labels = [
        'name'              => 'Aircraft Tags',
        'singular_name'     => 'Aircraft Tag',
        'search_items'      => 'Search Aircraft Tags',
        'all_items'         => 'All Aircraft Tags',
        'parent_item'       => 'Parent Aircraft Tag',
        'parent_item_colon' => 'Parent Aircraft Tag:',
        'edit_item'         => 'Edit Aircraft Tag',
        'update_item'       => 'Update Aircraft Tag',
        'add_new_item'      => 'Add New Aircraft Tag',
        'new_item_name'     => 'New Aircraft Tag Name',
        'menu_name'         => 'Aircraft Tags',
    ];

    $args = [
        'hierarchical'      => false, // true = behaves like categories, false = like tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'aircraft-tag'],
        'show_in_rest'      => true, // enable for Gutenberg & REST API
    ];

    register_taxonomy('aircraft_tag', ['aircrafts'], $args);
}
add_action('init', 'register_aircraft_taxonomy');





// >>>>>>>>>>>>>>>>> Register Services Custom Post Type
function register_services_custom_post_type() {
    $labels = [
        'name'                  => 'Services',
        'singular_name'         => 'Service',
        'menu_name'             => 'Services',
        'name_admin_bar'        => 'Service',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Service',
        'new_item'              => 'New Service',
        'edit_item'             => 'Edit Service',
        'view_item'             => 'View Service',
        'all_items'             => 'All Services',
        'search_items'          => 'Search Services',
        'not_found'             => 'No Services found!',
        'not_found_in_trash'    => 'No Services found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
        'rewrite'            => ['slug' => 'services'], // ✅ Single post URL is /case-studies/post-name
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        // 'taxonomies'      => ['category'], // Uncomment if needed
    ];
    register_post_type('services', $args);
}
add_action('init', 'register_services_custom_post_type');



// >>>>>>>>>>>>>>>>> Register Private Flights Custom Post Type
// function register_private_flights_custom_post_type() {
//     $labels = [
//         'name'                  => 'Private Flights',
//         'singular_name'         => 'Private Flight',
//         'menu_name'             => 'Private Flights',
//         'name_admin_bar'        => 'Private Flight',
//         'add_new'               => 'Add New',
//         'add_new_item'          => 'Add New Private Flight',
//         'new_item'              => 'New Private Flight',
//         'edit_item'             => 'Edit Private Flight',
//         'view_item'             => 'View Private Flight',
//         'all_items'             => 'All Private Flight',
//         'search_items'          => 'Search Private Flights',
//         'not_found'             => 'No Private Flights found!',
//         'not_found_in_trash'    => 'No Private Flights found in Trash.',
//     ];

//     $args = [
//         'labels'             => $labels,
//         'public'             => true,
//         // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
//         'rewrite'            => ['slug' => 'private-flights'], // ✅ Single post URL is /case-studies/post-name
//         'show_in_rest'       => true,
//         'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
//         'menu_position'      => 5,
//         'menu_icon'          => 'dashicons-post-status',
//         // 'taxonomies'      => ['category'], // Uncomment if needed
//     ];
//     register_post_type('private_flights', $args);
// }
// add_action('init', 'register_private_flights_custom_post_type');



// >>>>>>>>>>>>>>>>> Register Empty Flights Custom Post Type
function register_empty_flights_custom_post_type() {
    $labels = [
        'name'                  => 'Empty Flights',
        'singular_name'         => 'Empty Flight',
        'menu_name'             => 'Empty Flights',
        'name_admin_bar'        => 'Empty Flight',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Empty Flight',
        'new_item'              => 'New Empty Flight',
        'edit_item'             => 'Edit Empty Flight',
        'view_item'             => 'View Empty Flight',
        'all_items'             => 'All Empty Flights',
        'search_items'          => 'Search Empty Flights',
        'not_found'             => 'No Empty Flights found!',
        'not_found_in_trash'    => 'No Empty Flights found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
        'rewrite'            => ['slug' => 'empty-flights'], // ✅ Single post URL is /case-studies/post-name
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-post-status',
        // 'taxonomies'      => ['category'], // Uncomment if needed
    ];
    register_post_type('empty_flights', $args);
}
add_action('init', 'register_empty_flights_custom_post_type');
















// >>>>>>>>>>>>>>>>> Validate the Name Input field (to not take numbers)
add_filter( 'wpcf7_validate_text*', 'validate_name_no_numbers', 10, 2 );
add_filter( 'wpcf7_validate_text', 'validate_name_no_numbers', 10, 2 );

function validate_name_no_numbers( $result, $tag ) {
    if ( $tag->name === 'your-name' ) {
        $value = isset( $_POST['your-name'] ) ? trim( $_POST['your-name'] ) : '';
        if ( preg_match( '/[0-9]/', $value ) ) {
            $result->invalidate( $tag, "Numbers are not allowed." );
        }
    }
    return $result;
}


// >>>>>>>>>>>>>>>>> Validate Phone field: minimum 10 digits, numbers only
add_filter( 'wpcf7_validate_tel*', 'validate_phone_min_digits', 10, 2 );
add_filter( 'wpcf7_validate_tel', 'validate_phone_min_digits', 10, 2 );

function validate_phone_min_digits( $result, $tag ) {
    if ( $tag->name === 'your-phone' ) {
        $value = isset( $_POST['your-phone'] ) ? trim( $_POST['your-phone'] ) : '';

        // Remove spaces, hyphens, plus signs for counting
        $digits_only = preg_replace( '/\D/', '', $value );

        if ( strlen( $digits_only ) < 10 ) {
            $result->invalidate( $tag, "Please enter a valid phone number." );
        }
    }
    return $result;
}








// >>>>>>>>>>>>>>>>>>> Showing All Post Types
// add_action('init', function () {
//     $post_types = get_post_types([], 'objects');
//     echo '<pre>';
//     print_r(array_keys($post_types));
//     echo '</pre>';
//     exit;
// });


?>
