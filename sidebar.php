<h4 id="latest-post">latest posts</h4>

<!-- sidebar section 1 -->
<div id="sidebar-section-1">
    
    <!-- // links to 'sidebar-latest-post.php' -->
    <?php get_template_part('templates/temp/sidebar', 'latest-post'); ?>

</div>

<!-- sidebar section 2 -->
<div id="sidebar-section-2">

    <h4>search</h4>

    <div id="form-group">

        <!-- // gets the form from the 'searchform.php' file -->
        <?php get_search_form(); ?>

        <button id="search-bar-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>

    </div>

</div>

<!-- sidebar section 3 -->
<div id="sidebar-section-3">

    <h4>popular tags</h4>

    <div id="tags-container">
        <?php get_template_part('templates/temp/post', 'tags'); ?>
    </div>
    
</div>