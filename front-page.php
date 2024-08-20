<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl">
        <div class="grid lg:grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="lg:col-span-6 lg:my-4">
                <?php

                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                // Define custom query parameters
                $args = array(
                    'post_type'=>'post', // Your post type name
                    'posts_per_page' => 5,
                    'paged' => $paged,
                );

                // Instantiate custom query
                $custom_query = new WP_Query($args);

                // Check if there are posts
                if ($custom_query->have_posts()) :
                    // Start the loop
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <!-- Content -->
                        <?php get_template_part('partials/post', 'card'); ?>   
                    <?php 
                    endwhile; ?>
                    <div class="pagination_links flex justify-center text-black font-kanit text-lg font-medium">
                        <?php
                        $total_pages = $custom_query->max_num_pages;

                        if ($total_pages > 1){
                    
                            $current_page = max(1, get_query_var('paged'));
                    
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => '/page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => __('« Prev'),
                                'next_text'    => __('Next »'),
                            ));
                        }   ?>
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
            <div class="hidden lg:block col-span-2 my-10 pr-10">
                <?php get_sidebar( 'primary' ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>