<?php
        
    // gets all the tags from the wp database
    // returns all the tags into a var
    $tags = get_tags();

?>

<!-- if we have tags, then i want to iterate the tags one by one using a for each loop -->
<?php if( $tags ) : ?>
<?php foreach( $tags as $tag ) : ?>
    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ) ?>"><?php echo esc_html( $tag->name ); ?></a>
<?php endforeach; ?>
<?php endif; ?>