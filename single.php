<?php
    get_header();
?> 
            
<!-- // Main -->
<main>

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
                <div id="single-article">

                    <!-- Loop -->
                    <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>

                        <!-- Blog Title -->
                        <a href="<?php the_permalink(); ?>">
                            <h2><?php echo the_title(); ?></h2>
                        </a>

                        <!-- Blog Post -->
                        <div id="single-post">

                            <!-- Blog Image -->
                            <?php if(has_post_thumbnail()) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" id="single-img">
                            <?php endif; ?>

                            <div id="single-post-content">

                                <!-- Blog Excerpt -->
                                <p><?php echo get_the_content(); ?></p>
                                <hr>

                                <!-- Blog Categories -->
                                <p><?php get_template_part( 'templates/temp/post', 'categories' ); ?></p>

                            </div>

                        </div>

                    <?php endwhile; ?>
                    <?php else : ?>

                    <?php echo wpautop('Sorry, no posts were found'); ?>
                    <?php endif; ?>

                </div>

                <!-- // Sidebar -->
                <div id="single-sidebar">
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