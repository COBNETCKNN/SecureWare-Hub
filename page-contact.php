<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl">
        <div class="grid lg:grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                <div class="page_wrapper m-10">
                    <!-- Content -->
                    <div class="page_contact font-kanit">
                        <h1 class="text-center"><?php echo the_title(); ?></h1>
                        <?php the_content(); ?>
                    </div>
                    <!-- Contact Form -->
                    <div class="flex justify-center mt-5">
                        <?php 
                        $formShortcode = get_field('contact_form_shortcode');

                        echo do_shortcode($formShortcode); 
                        ?>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="hidden lg:block col-span-2 my-10 pr-10">
                <?php get_sidebar( 'primary' ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>