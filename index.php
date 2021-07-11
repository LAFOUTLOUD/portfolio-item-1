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