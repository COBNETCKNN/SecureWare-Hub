<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 rounded-xl">
        <div class="grid grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                <?php

                if ( have_posts() ) : ?>
                <div class="m-10"> 
                    <?php 
                        // Get the category title and description
                        single_cat_title( '<h1 class="category-title font-kanit text-2xl font-light">Category:&nbsp;', '</h1>' );
                        the_archive_description( '<div class="category-description">', '</div>' ); 
                    ?>
                </div>
                <?php 


                    // Start the Loop
                    while ( have_posts() ) : the_post();
                        // Display post content
                        ?>
                        <!-- Content -->
                        <?php get_template_part('partials/post', 'card'); ?>   
                    <?php 
                    endwhile; ?>
                    <div class="pagination_links flex justify-center text-black font-kanit text-lg font-medium">
                        <?php
                            // Pagination
                            the_posts_pagination( array(
                                'prev_text' => __( 'Previous', 'textdomain' ),
                                'next_text' => __( 'Next', 'textdomain' ),
                            ) );
                        ?>
                    </div>
 
                <?php 
                    // Reset post data to restore the original query
                    wp_reset_postdata();
                else:
                    // If no posts are found
                    echo 'No posts found';
                endif;
                ?>
            </div>
            <!-- Sidebar -->
            <div class="col-span-2 my-10 pr-10">
                <?php get_sidebar( 'primary' ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>