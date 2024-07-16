<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl">
        <div class="grid lg:grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                <div class="aboutUs_content_wrapper m-10">
                <!-- Image -->
                 <div class="aboutUs_logo__wrapper flex justify-center py-10">
                    <?php 
                    // Get the URL of the theme's directory
                    $template_directory = get_template_directory_uri();

                    // Specify the path to your image relative to the theme's directory
                    $image_path = '/assets/images/logo-written.webp';

                    // Combine the theme directory URL with the image path
                    $image_url = $template_directory . $image_path;
                    ?>

                    <!-- Output the image in an HTML img tag -->
                    <img src="<?php echo esc_url($image_url); ?>" alt="SecureWareHub Logo image">
                 </div>
                <!-- Content -->
                 <div class="content__wrapper text-lg font-light font-kanit">
                    <?php the_content(); ?>
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