<?php

/*
*   Template Name: Blog Posts
*/

?>

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<!-- Blog Post -->
<div class="post">

    <!-- Blog Post Thumbnail -->
    <?php if(has_post_thumbnail()) : ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img">
    <?php endif; ?>

    <!-- Blog Post Content -->
    <div class="content">

        <!-- Post Author and Post Date-->
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <p>by <?php the_author(); ?> <?php echo get_the_date(); ?></p>
        </a>

        <!-- Post Title -->
        <a href="<?php the_permalink(); ?>">
            <h2><?php echo the_title(); ?></h2>
        </a>

        <!-- Post Categories -->
        <p><?php echo get_the_excerpt(); ?></p>
        <hr>
        <p><?php get_template_part( 'templates/temp/post', 'categories' ); ?></p>
    </div>
</div>

<?php endwhile; ?>
<?php else : ?>

<!-- if your website doesn't have any posts in it, you get a message -->
<?php echo wpautop('Sorry, no posts were found'); ?>
<?php endif; ?>