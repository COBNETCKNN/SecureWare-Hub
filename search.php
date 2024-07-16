<?php get_header(); ?>

<section id="content">
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl h-screen">
        <div class="grid lg:grid-cols-8 gap-5">
            <!-- Blog posts -->
            <div class="col-span-6 my-4">
                    <h1 class="text-black font-averta text-3xl font-medium leading-tight mx-10 my-5">Search results for: "<?php echo get_search_query(); ?>"</h1>

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="search-result-item">
                                <?php get_template_part('partials/post', 'card'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <div class="no-results mt-14 mx-10">
                            <h2 class="text-black font-averta text-2xl font-medium leading-tight">No results found</h2>
                            <p class="text-black font-averta text-2xl font-normal leading-tight my-3">Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
                        </div>
                    <?php endif; ?>
                </div>
            <!-- Sidebar -->
            <div class="hidden lg:block col-span-2 my-10 pr-10">
                <?php get_sidebar( 'primary' ); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>