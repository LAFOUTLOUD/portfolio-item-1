<?php 

/*
*   Template Name: functions.php
*   Description: Add features to wordpress theme
*/

// (1) adds the 'customizer.php' file
require_once('templates/helpers/customizer.php');

// (2) links to the custom css stylesheet and custom js file
function myFunction() {
    
    // include custom stylesheet
    wp_enqueue_style( 'my-custom-css', get_stylesheet_uri() );

    // include font awesome
    wp_enqueue_script( '', 'https://kit.fontawesome.com/8ba1e13922.js' );

    // include custom js
    wp_enqueue_script( 'script.js', get_template_directory_uri() . '/assets/js/script.js' );

};

// calls the fn using an action hook
add_action( 'wp_enqueue_scripts', 'myFunction' );

// (3) adds the 'Featured image' to 'Post', 
// adding new features to wordpress theme
function newFeatures() {
    
    // adds <title> to wordpress theme
    add_theme_support( "title-tag" );

    // adds the 'feature image' option when you edit posts in wordpress
    add_theme_support("post-thumbnails");

    // adds search form
    add_theme_support("html5", array( "search-form" ) );

    // adds 'Select logo' to Site Identity
    add_theme_support('custom-logo');

}

add_action("after_setup_theme", "newFeatures");

// (4) adds 'Menu' to 'Appearance'
function myFunction2() {
    register_nav_menus(
        array(

            // adds 'Primary Menu' and 'Social Menu' to 'Menus'
            "primary-menu" => __( "Primary Menu", "text_domain" ),
            "social-menu" => __( 'Social Menu', 'text_domain' )
        )
    );
}

add_action("init", "myFunction2");

// (5) Changes how many words your posts display
function myFunction4($length) {
    return 34;
};

// filter hook changes the output of a fn
add_filter('excerpt_length', 'myFunction4');

?>