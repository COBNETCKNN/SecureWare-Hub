<div class="mx-7 my-6 px-10 bg-neutral-100 lg:rounded-lg shadow-md">
    <div class="grid grid-cols-6 gap-2">
        <!-- Featured image -->
        <?php $image = get_the_post_thumbnail( null, 'thumbnail', [ 'alt' => esc_attr( get_the_title() ), 'title' => esc_attr( get_the_title() ) ] ); ?>
        <div class="col-span-2 lg:col-span-1 flex justify-center items-center mr-8">
            <?php echo $image; ?>
        </div>
        <div class="col-span-4 lg:col-span-5 my-6 ">
            <div class="mt-2">
                <h1>
                    <a href="<?php the_permalink(); ?>" class="text-2xl font-medium text-gray-700 hover:underline font-kanit"><?php the_title(); ?></a>
                </h1>
                <p class="mt-2 text-gray-600 font-kanit font-normal"><?php echo wp_trim_words(get_the_content(), 55);?></p>
            </div>
            <div class="relative flex items-center justify-end mt-4">
                <a type="button" href="<?php the_permalink(); ?>" class="button-74 text-black py-2 px-5 border border-black rounded-3xl font-kanit">Read more</a>
            </div>
        </div>
    </div>
</div>