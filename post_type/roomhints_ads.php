<?php
/**
 * Created by PhpStorm.
 * User: sevak
 * Date: 9/9/18
 * Time: 11:29 AM
 */
// Register Custom Post Type
function ads_post_type() {

    $labels = array(
        'name'                  => _x( 'Roomhints Ads', 'Post Type General Name', 'roomhints_ads' ),
        'singular_name'         => _x( 'Roomhints Ads', 'Post Type Singular Name', 'roomhints_ads' ),
        'menu_name'             => __( 'Roomhints Ads', 'roomhints_ads' ),
        'name_admin_bar'        => __( 'Roomhints Ads', 'roomhints_ads' ),
        'archives'              => __( 'Roomhints Ads Archives', 'roomhints_ads' ),
        'attributes'            => __( 'Roomhints Ads Attributes', 'roomhints_ads' ),
        'parent_item_colon'     => __( 'Parent Roomhints Ads:', 'roomhints_ads' ),
        'all_items'             => __( 'All Roomhints Ads', 'roomhints_ads' ),
        'add_new_item'          => __( 'Add New Roomhints Ads', 'roomhints_ads' ),
        'add_new'               => __( 'Add Roomhints Ads', 'roomhints_ads' ),
        'new_item'              => __( 'New Roomhints Ads', 'roomhints_ads' ),
        'edit_item'             => __( 'Edit Roomhints Ads', 'roomhints_ads' ),
        'update_item'           => __( 'Update Roomhints Ads', 'roomhints_ads' ),
        'view_item'             => __( 'View Roomhints Ads', 'roomhints_ads' ),
        'view_items'            => __( 'View Roomhints Ads', 'roomhints_ads' ),
        'search_items'          => __( 'Search Roomhints Ads', 'roomhints_ads' ),
        'not_found'             => __( 'Not found', 'roomhints_ads' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'roomhints_ads' ),
        'featured_image'        => __( 'Featured Image', 'roomhints_ads' ),
        'set_featured_image'    => __( 'Set featured image', 'roomhints_ads' ),
        'remove_featured_image' => __( 'Remove featured image', 'roomhints_ads' ),
        'use_featured_image'    => __( 'Use as featured image', 'roomhints_ads' ),
        'insert_into_item'      => __( 'Insert into item', 'roomhints_ads' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Roomhints Ads', 'roomhints_ads' ),
        'items_list'            => __( 'Roomhints Ads list', 'roomhints_ads' ),
        'items_list_navigation' => __( 'Roomhints Ads list navigation', 'roomhints_ads' ),
        'filter_items_list'     => __( 'Filter Roomhints Ads list', 'roomhints_ads' ),
    );
    $args = array(
        'label'                 => __( 'Roomhints Ads', 'roomhints_ads' ),
        'description'           => __( 'Roomhints Ads', 'roomhints_ads' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-chart-area',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
    );
    register_post_type( 'roomhints_ads', $args );

}
add_action( 'init', 'ads_post_type', 0 );


// Register Custom Taxonomy
function ads_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Ads Categories', 'Taxonomy General Name', 'roomhints_ads' ),
        'singular_name'              => _x( 'Ads Category', 'Taxonomy Singular Name', 'roomhints_ads' ),
        'menu_name'                  => __( 'Ads Category', 'roomhints_ads' ),
        'all_items'                  => __( 'All Categories', 'roomhints_ads' ),
        'parent_item'                => __( 'Parent Category', 'roomhints_ads' ),
        'parent_item_colon'          => __( 'Parent Category:', 'roomhints_ads' ),
        'new_item_name'              => __( 'New Category Name', 'roomhints_ads' ),
        'add_new_item'               => __( 'Add New Category', 'roomhints_ads' ),
        'edit_item'                  => __( 'Edit Category', 'roomhints_ads' ),
        'update_item'                => __( 'Update Category', 'roomhints_ads' ),
        'view_item'                  => __( 'View Category', 'roomhints_ads' ),
        'separate_items_with_commas' => __( 'Separate Categories with commas', 'roomhints_ads' ),
        'add_or_remove_items'        => __( 'Add or remove Categories', 'roomhints_ads' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'roomhints_ads' ),
        'popular_items'              => __( 'Popular Categories', 'roomhints_ads' ),
        'search_items'               => __( 'Search Category', 'roomhints_ads' ),
        'not_found'                  => __( 'Not Found', 'roomhints_ads' ),
        'no_terms'                   => __( 'No Category', 'roomhints_ads' ),
        'items_list'                 => __( 'Categories list', 'roomhints_ads' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'roomhints_ads' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'rewrite'                    => false,
    );
    register_taxonomy( 'ads_categories', array( 'roomhints_ads' ), $args );

}
add_action( 'init', 'ads_taxonomy', 0 );
