
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
function register_private_flights_custom_post_type() {
    $labels = [
        'name'                  => 'Private Flights',
        'singular_name'         => 'Private Flight',
        'menu_name'             => 'Private Flights',
        'name_admin_bar'        => 'Private Flight',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Private Flight',
        'new_item'              => 'New Private Flight',
        'edit_item'             => 'Edit Private Flight',
        'view_item'             => 'View Private Flight',
        'all_items'             => 'All Private Flight',
        'search_items'          => 'Search Private Flights',
        'not_found'             => 'No Private Flights found!',
        'not_found_in_trash'    => 'No Private Flights found in Trash.',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        // 'has_archive'        => 'all-collections', // ✅ Archive uses a non-conflicting slug
        'rewrite'            => ['slug' => 'private-flights'], // ✅ Single post URL is /case-studies/post-name
        'show_in_rest'       => true,
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-post-status',
        // 'taxonomies'      => ['category'], // Uncomment if needed
    ];
    register_post_type('private_flights', $args);
}
add_action('init', 'register_private_flights_custom_post_type');












// >>>>>>>>>>>>>>>>>>> Showing All Post Types
// add_action('init', function () {
//     $post_types = get_post_types([], 'objects');
//     echo '<pre>';
//     print_r(array_keys($post_types));
//     echo '</pre>';
//     exit;
// });


?>

