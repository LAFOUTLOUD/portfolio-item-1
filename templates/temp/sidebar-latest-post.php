<?php

// if the condition is true, the page number is returned, otherwise the else statement is executed
// we store the page number in the 'paged' variable
$paged = get_query_var('paged') ? get_query_var('paged') : 1;

// we create a new php var, arguments
// we specify these arguments to the wp query class
// we create an array, inside the array we specify different arguments to the wp query class
// first, we create a wp query class, we create the var 'loop'
// we store the wp query object into this loop variable, we create the 'loop' var
//  its value is new Wp_Query();
// in the (), we call the arguments

// in the array, the first thing we do is specify the type of post to this wp query class
// post type
$args = array(
    // we specify the type of post to this wp query class
    // its going to be a type of 'post'
    'post_type' => 'post',

    // next we specify how many posts we want the wp query class to display
    // only 5 posts will be displayed on the page
    'posts_per_page' => 5,

    // we specify the page number
    'paged' => $paged
);

// (3) Wp_Query() class
$loop = new Wp_Query($args);

?>

<?php

    // we need to create a for loop to sisplay the blog posts one by one
    // we call the default global post variable
    // instead of calling the default global post var, have_posts(), we call our wp query var here
    // we use a method of the $loop var, have_posts()
    if($loop->have_posts()) :

?>
<?php while ($loop->have_posts()) : $loop->the_post()?>

    <!-- sidebar post -->
    <div class="sidebar-row">
        
        <!-- Feature image of the blog post -->
        <div class="sidebar-row-column-1">
            <?php if(has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="sidebar-section-1-img">
            <?php endif; ?>
        </div>

        <div class="sidebar-row-column-2">
            <div class="sidebar-row-column-2-content">

                <!-- categories -->
                <h2>
                    <?php
                        
                        // stores the category that belongs to the article
                        $categories = get_the_category();

                        // if the categories are not empty
                        if (!empty($categories)) {
                            foreach($categories as $category){
                                printf('<li><a href="%1$s">%2$s</a></li>',
                                    esc_url( get_category_link( $category -> term_id )),
                                    esc_html( $category -> name ));
                            }
                        }
                    ?>
                </h2>

                <!-- title of the articles -->
                <a href="<?php the_permalink(); ?>" id="sidebar-title"><?php echo the_title(); ?></a>
            </div>
        </div>

    </div>

<?php endwhile; ?>
<?php else : ?>
<?php echo wpautop('Sorry, No posts were found.'); ?>
<?php endif; ?>

<?php
    
    // used to destroy the previous query, and set a new query
    wp_reset_query();

    // after looping through the nested query, this fn restores the posts global var to the current post in this query
    // in the future, this while loop is what gives you the descending order of your blog posts
    // in the loop is where we call the articles
    wp_reset_postdata();
?>