<!DOCTYPE html>
    <html <?php language_attributes(); ?>>
        
        <!-- head section -->
        <head>
            <meta charset="<?php bloginfo(); ?>">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- you still need this to link to the stylesheet -->
            <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

            <!-- used to add plugins and script files, including style.css, using functions.php template file -->
            <?php wp_head(); ?>
        </head>

        <body>

            <!-- // Header -->
            <header>

                
            
                <!-- // Nav -->

                <!-- () Prevents the Admin Bar from covering the fixed navbar -->
                <nav <?php echo (is_admin_bar_showing()) ? ' style="top: 32px;" ' : ''; ?> id="nav">
                    <div class="container">
                        <ul>

                            <!-- (1) nav logo -->
                            <li id="logo">
                                <a href="<?php echo home_url('/'); ?>">diom&#275;d&#275;s</a>
                            </li>

                            <!-- (2) nav links -->
                            <div id="nav-links">

                                <?php
                                
                                    // display primary menu
                                    if( has_nav_menu( "primary-menu" )) {
                                        wp_nav_menu(array(
                                            "theme_location" => "primary-menu",
                                            "container" => ""
                                        ));
                                    }
                                
                                ?>

                            </div>

                            <!-- (3) nav search bar -->
                            <li id="search-bar">
                                <?php get_search_form(); ?>
                            </li>

                        </ul>
                    </div>
                </nav>

                <!-- // Hero Image -->
                <section>
                    
                    <!-- hero image -->
                    <div>
                        <?php if(get_theme_mod("header_image")) : ?>
                        <img src="<?php echo esc_url( get_theme_mod( "header_image" ) )?>" id="hero-img">
                        <?php EndIf; ?>
                    </div>

                    <!-- hero image text -->
                    <div class="container">
                        
                        <div id="hero-image-column">

                            <!-- (1) masthead -->
                            <?php if(get_theme_mod( "header_image" )) : ?>
                                <h1><?php echo get_theme_mod("header_text_field") ?></h1>
                            <?php EndIf; ?>

                            <!-- (2) masthead description -->
                            <?php if( get_theme_mod( "header_text_field" ) ) : ?>
                                <h2><?php echo get_theme_mod( "header_desc_field" ) ?></h2>
                            <!-- <h2>Beautiful, Elegantly Coded, One-Page WordPress Theme for Business</h2> -->
                            <?php EndIf; ?>
                            
                            <!-- (3) masthead button -->
                            <button>see more</button>

                        </div>

                    </div>
                </section>
            </header>