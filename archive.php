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
                <!-- id="nav" is needed for the script.js -->
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
            </header> 
            
<!-- // Main -->
<main>

    <h2>Category.php</h2>

    <!-- category section -->
    <section id="category-section">
        <div class="container">
            <ul>
                <?php

                    // load template post-content.php in index.php
                    get_template_part('templates/temp/categories', 'content');

                ?>
            </ul>
        </div>
    </section>

    <!-- // Blog Section -->
    <section>
        <div class="container">
            
            <div class="row">

                <!-- // Article -->
                <div id="article">

                    <!-- article row 1 -->
                    <div>
                        <div id="article-grid">

                            <?php
                                
                                // load template post-content.php in index.php
                                get_template_part( 'templates/temp/post', 'content' );
                            
                            ?>

                        </div>
                    </div>

                    <!-- article row 2 -->
                    <div>

                        <!-- // Pagination -->
                        <section id="pagination">
                                <div id="pagination-column">

                                    <?php
                                    
                                        // controls the pagination
                                        echo paginate_links(array(
                                            'mid_size' => 3,
                                            'prev_text' => __('<i class="fas fa-arrow-left"></i>'),
                                            'next_text' => __('<i class="fas fa-arrow-right"></i>')
                                        ));
                                    
                                    ?>
                                </div>
                        </section>

                    </div>

                </div>

                <!-- // Sidebar -->
                <div id="sidebar">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
    // get footer.php file
    get_footer();
?>         