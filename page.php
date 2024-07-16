<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl">
        <div class="grid lg:grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                <div class="page_wrapper m-10 font-kanit">
                    <?php the_content(); ?>
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