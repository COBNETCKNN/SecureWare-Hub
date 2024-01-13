<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 rounded-xl">
        <div class="grid grid-cols-8 gap-2">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                <?php
                // Define custom query parameters
                $args = array(
                    'post_type'      => 'post',          // The post type you want to display (e.g., post, page)
                    'posts_per_page' => 10,              // Number of posts to display
                    'orderby'        => 'date',          // Order posts by date
                    'order'          => 'DESC',          // Display posts in descending order
                    'post_status'    => 'publish',       // Display only published posts
                );

                // Instantiate custom query
                $custom_query = new WP_Query($args);

                // Check if there are posts
                if ($custom_query->have_posts()) :
                    // Start the loop
                    while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                        <!-- Content -->
                            <div class="mx-12 my-6 px-10 bg-neutral-100 rounded-lg shadow-md">
                                <div class="grid grid-cols-6 gap-2">
                                    <!-- Featured image -->
                                    <div class="col-span-1 flex justify-center items-center mr-8">
                                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                                    </div>
                                    <div class="col-span-5 my-6 ">
                                        <div class="mt-2">
                                            <h1>
                                                <a href="<?php the_permalink(); ?>" class="text-2xl font-bold text-gray-700 hover:underline font-kanit" target="_blank"><?php the_title(); ?></a>
                                            </h1>
                                            <p class="mt-2 text-gray-600 font-kanit"><?php echo wp_trim_words(get_the_content(), 55);?></p>
                                        </div>
                                        <div class="relative flex items-center justify-end mt-4">
                                            <a type="button" href="<?php the_permalink(); ?>" class="button-74 text-black py-2 px-5 border border-black rounded-3xl font-kanit" target="_blank">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    <?php 
                    endwhile;

                    // Reset post data to restore the original query
                    wp_reset_postdata();
                else :
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