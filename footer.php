<footer>

    <div class="container">

        <!-- footer row 1 -->
        <div id="footer-row-1">
            
            <!-- footer column 1 -->
            <div id="footer-column-1">
                <a id="logo" href="<?php echo home_url('/'); ?>">diom&#275;d&#275;s</a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Arcu bibendum at varius vel.</p>
                
                <!-- // Adds social media links -->
                <?php

                    if( has_nav_menu( "social-menu" )) {
                        wp_nav_menu(array(
                            "theme_location" => "social-menu",
                            "container" => ""
                        ));
                    }
				
				?>

            </div>

            <!-- footer column 2 -->
            <div id="footer-column-2">
                
                <!-- recent post -->
                <h4>recent posts</h4>

                <!-- grid of images -->
                <div id="footer-row">

                    <!-- get template file recent-post.php -->
                    <?php get_template_part('templates/temp/recent', 'post'); ?>

                </div>
            </div>

            <!-- footer column 3 -->
            <div id="footer-column-3">
                <h4>popular tags</h4>

                <!-- // links to the 'post-tags.php' file -->
                <?php get_template_part('templates/temp/post', 'tags'); ?>

            </div>

        </div>

        <!-- footer row 2 -->
        <div id="footer-row-2">
            <p>WordPress Theme by <a href="<?php echo home_url('/'); ?>">diom&#275;d&#275;s</a> &copy; <?php the_date('Y');?></p>
        </div>

    </div>

</footer>

<!-- adds the admin bar to the theme -->
<?php wp_footer(); ?>
    
</body>
</html>