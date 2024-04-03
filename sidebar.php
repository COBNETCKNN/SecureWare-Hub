<section id="searchBar">
    <h3 class="font-kanit font-semibold text-base pb-4">Download your desired software for free!</h3>
    <div id="sidebar-primary" class="sidebar">
        <?php dynamic_sidebar( 'primary' ); ?>
    </div>
</section>
<section id="trustedBy">
    <h3 class="font-kanit text-xl font-medium">Trusted by:</h3>
    <?php if( have_rows('sidebar_trustedby', 6) ): ?>
        <ul class="slides">
        <?php while( have_rows('sidebar_trustedby', 6) ): the_row(); 
            $image = get_sub_field('sidebar_trustedby_logos', 6);
            ?>
            <li class="my-3">
                <?php echo wp_get_attachment_image( $image, 'trustedBy' ); ?>
                <p><?php the_sub_field('caption'); ?></p>
            </li>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</section>
<section id="latestPosts">
    <h3 class="font-kanit text-xl py-4">Latest posts:</h3>
    <aside id="sidebar" class="widget-area">
        <ul>
            <?php
            $args = array(
                'post_type'      => 'post', // You can change this to other post types if needed.
                'posts_per_page' => 10,
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>
                    <li class="sidebarLinks py-1 text-medium">
                        <span>&raquo;</span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data to the main loop.
            else :
                echo 'No posts found';
            endif;
            ?>
        </ul>
    </aside>
</section>
