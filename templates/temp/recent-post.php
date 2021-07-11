<?php

    // get our recent post using wp query class
    // create a var
    // get query gives you the current page
    // we put it in a conditional if statement, get the current page or return the value 1
    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

    // we call the argument variable
    // in array, we specify arguments to the wp query class
    $args = array(

        // post type is going to be 'post'
        'post-type' => 'post',

        // we specify the order, descending order
        'order' => 'DESC',

        // we want 6 posts per page
        'posts_per_page' => 6,

        // we specify the order of the dates
        // we want to get the blog posts that are 30 days older
        // we want to display the blog post in the recent post section
        'date_query' => array(
            'after' => '-30 days',

            // we will query against this post date
            // if the post is older than 30 days, we will get that post and display them 1 by 1 in the recent post section
            'column' => 'post_date'
        ),
        'paged' => $paged
    );

    // we create a loop var, and a new object of the wp query class
    // in the () of the class, we specify arguments
    $loop = new WP_Query($args);

?>

<?php $count = 1; ?>
<?php if($loop->have_posts()) : ?>
<?php while($loop->have_posts()) : $loop->the_post() ?>

    <?php if($count % 2) : ?>
        <div class="footer-column-2-column">
            
            <!-- replaces the hard coded values, if has post thumbnail then we want to display that thumbnail, instead of specifyin that hard coded value -->
            <?php if(has_post_thumbnail()) : ?>
                <!-- gets the URL of the post's thumbnail -->
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="img">
            <?php endif; ?>

    <?php else : ?>

            <?php if(has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="footer image" class="img">
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php $count++; ?>

<?php endwhile; ?>
<?php endif; ?>

<?php
    // resets the previous query data
    wp_reset_query();
    wp_reset_postdata();
?>

