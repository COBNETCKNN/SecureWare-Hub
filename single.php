<?php get_header(); ?>

<!-- Single Post Content -->
<section id="singlePost">
    <!-- Content -->
    <div class="container mx-auto bg-slate py-1 rounded-xl">
        <div class="grid grid-cols-8 gap-2">
            <!-- Single post -->
            <div class="col-span-6 my-4">
                <div class="singelPost_content m-10">
                    <!-- Title -->
                    <h1 class="signlePost_title font-kanit text-3xl font-semibold"><?php the_title(); ?></h1>
                    <!-- Content -->
                    <div class="singlePost_editor__content mt-7">
                        <?php $image = get_the_post_thumbnail( null, 'thumbnail', [ 'alt' => esc_attr( get_the_title() ), 'title' => esc_attr( get_the_title() ) ] ); ?>
                        <div class="float-left mr-5">
                            <?php echo $image; ?>
                        </div>
                        <div class="singlePost_content__wrapper text-lg font-light font-kanit">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
                <!-- Download Button -->
                <div class="singlePost_download__wrapper">
                    <div class="flex justify-center items-center">
                        <a type="button" href="" class="button-74 text-black py-2 px-5 border border-black rounded-3xl font-kanit" target="_blank">Download Now!</a>
                    </div>
                </div>
                <div class="singlePost_howToInstall__wrapper">
                    
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-span-2 my-10 pr-10">
                <?php get_sidebar( 'primary' ); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>