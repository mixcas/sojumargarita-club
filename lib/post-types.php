<?php
// Menu icons for Custom Post Types
// https://developer.wordpress.org/resource/dashicons/
function add_menu_icons_styles(){
?>
 
<style>
#menu-posts-show .dashicons-admin-post:before {
    content: '\f126';
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );


//Register Custom Post Types
add_action( 'init', 'register_cpt_show' );

function register_cpt_show() {

    $labels = array( 
        'name' => _x( 'Shows', 'show' ),
        'singular_name' => _x( 'Show', 'show' ),
        'add_new' => _x( 'Add New', 'show' ),
        'add_new_item' => _x( 'Add New Show', 'show' ),
        'edit_item' => _x( 'Edit Show', 'show' ),
        'new_item' => _x( 'New Show', 'show' ),
        'view_item' => _x( 'View Show', 'show' ),
        'search_items' => _x( 'Search Shows', 'show' ),
        'not_found' => _x( 'No shows found', 'show' ),
        'not_found_in_trash' => _x( 'No shows found in Trash', 'show' ),
        'parent_item_colon' => _x( 'Parent Show:', 'show' ),
        'menu_name' => _x( 'Shows', 'show' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor', 'thumbnail' ),
        
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'show', $args );
}
