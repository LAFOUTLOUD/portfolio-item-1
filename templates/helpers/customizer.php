<?php

/* WordPress Customizer Settings */

function myFunction3($wp_customizer) {

    // creates a new section within the 'Customize' menu of 'Themes'
    $wp_customizer->add_section('header', array(

        // names the section 'Header Settings'
        "title" => __("Header Settings", "WpDaily"),
        "priority" => 70
    ));

    // (1) creates the 'Header Image' setting within the 'Header Settings' section
    $wp_customizer->add_setting("header_image", array(
        "capability" => "edit_theme_options"
    ));

    // adds the control to upload images
    $wp_customizer->add_control( new WP_Customize_Image_Control( $wp_customizer, "header_image", array(
        
        // labels the setting 'Header Image' to the control
        "label" => __("Header Image", "WpDaily"),
        "section" => "header"
    )));

    // (2) add header title field
    $wp_customizer->add_setting("header_text_field", array(
        "capability" => "edit_theme_options",
        "default" => "Slick Material Design"
    ));

    $wp_customizer->add_control("header_text_control", array(
        
        // adds the label "Header Text"
        "label" => __("Header Text", "Daily"),

        // adds the description 'Change Header Text'
        "description" => "Change Header Text",

        // adds this control to the 'Header Settings' section
        "section" => "header",

        // defines the the setting of the control as a 'header text field', creating an input field
        "settings" => "header_text_field"

    ));

    // (3) add header description field
    $wp_customizer->add_setting("header_desc_field", array(
        'capability' => 'edit_theme_options',
        'default' => 'Beautiful, Elegantly Coded, One-Page WordPress Theme for Business'
    ));

    $wp_customizer->add_control("header_description_control", array(
        'label' => __('Header Description', 'wp_template'),
        'description' => 'Change Header Description',
        'section' => 'header',
        'settings' => 'header_desc_field'
    ));

};

add_action("customize_register", "myFunction3");

?>