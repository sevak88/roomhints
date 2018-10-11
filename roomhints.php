<?php

/*
Plugin Name: Roomhints
Plugin URI: http://roomhints.com/
Description: Roomhints Plugin, Shortcode example <code>[advertising template=1 columns=3 categories=99,8,4 count=2 ids=18,88,66]</code>
Version: 1.0
Author: sevak
Author URI: https://github.com/sevak88
License: GPL2
*/





include_once (__DIR__ . "/acf/acf.php");
include_once (__DIR__ . "/post_type/roomhints_ads.php");
include_once (__DIR__ . "/shortcodes.php");


//enqueue style css
add_action( 'wp_enqueue_scripts', function (){
    wp_register_style( 'template-1-style', plugins_url( '/templates/template_1/style.css', __FILE__ ), array(), '1.0.0', 'all' );
    wp_enqueue_script( 'roomhints-scripts', plugins_url( '/js/scripts.js', __FILE__ ), array("jquery") );
} );

//add_filter('acf/settings/show_admin', '__return_false');

