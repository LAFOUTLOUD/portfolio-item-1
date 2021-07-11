<?php

    // adds the categories assigned to a post to the bottom of the post
    $categories = get_the_category();

    if (!empty($categories)){
        foreach($categories as $category){
            printf('<a href="%1$s">%2$s </a>',
            esc_url(get_category_link( $category->term_id )),
            esc_html($category->name));
        }
    }

?>