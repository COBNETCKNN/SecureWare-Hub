<?php get_header(); ?>

<script type="text/javascript" src="https://eradictrkr.com/script_include.php?id=1614765"></script>

<!-- Single Post Content -->
<section id="singlePost">
    <!-- Content -->
    <div class="container mx-auto bg-slate py-1 lg:rounded-xl">
        <div class="grid lg:grid-cols-8 gap-2">
            <!-- Single post -->
            <div class="lg:col-span-6">
                <div class="singelPost_content m-10">
                    <!-- Breadcrumbs -->
                    <div class="breadcrumbs_wrapper relative z-10">
                        <nav role="navigation" aria-label="Feynic navigation" class="hidden lg:block breadcrumb font-kanit text-md text-black font-light mb-8">
                            <ol class="flex">
                                <li>
                                <a class="breadcrumb_link" href="<?php echo site_url(); ?>">Home</a>
                                </li>
                                <span aria-hidden="true" class="breadcrumb-separator-white mx-2">&gt;</span>
                                <li>
                                <?php
                                    // Loop through categories
                                    foreach (get_the_category() as $category) {
                                        // Output the category name wrapped in a link
                                        echo '<a class="breadcrumb_link text-black" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a> ';
                                    }
                                ?>
                                </li>
                                <span aria-hidden="true" class="breadcrumb-separator-white mx-2">&gt;</span>
                                <li>
                                <a href="<?php echo the_permalink(); ?>" class="breadcrumb_link text-black font-light"><?php echo the_title(); ?></a>
                                </li>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Title -->
                    <h1 class="signlePost_title font-kanit text-3xl font-medium"><?php the_title(); ?></h1>
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
                <div class="m-10">
                    <?php if( have_rows('single_post_fields') ): ?>
                        <?php while( have_rows('single_post_fields') ): the_row(); ?>
                            <!-- Gallery -->
                            <div class="singlePost_gallery">
                                <h2 class="font-kanit text-black font-normal text-center text-3xl mb-5">Gallery:</h2>
                                <div class="gallery_wrapper">
                                    <div id="gallery" class="grid grid-cols-3 gap-4">
                                        <?php
                                        $images = get_sub_field('software_gallery'); // Assuming you are using ACF to get gallery images
                                        $size = 'full';
                                        if ($images) :
                                            foreach ($images as $image) : 
                                                echo wp_get_attachment_image( $image, $size );
                                            ?>
                                                
                                            <?php endforeach;
                                        endif; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- Download Button -->
                            <div class="singlePost_download__wrapper my-10">
                                <div class="flex justify-center items-center">
                                    <?php
                                    // Assuming the custom field key is 'custom_link' and it's on the current post
                                    $custom_link = get_field('redirect_link');
                                    ?>
                                    <a id="locker_button" type="button" data-custom-link="<?php echo esc_url($custom_link); ?>" class="button-74 text-black py-2 px-5 border border-black rounded-3xl font-kanit" target="_blank">Download Now!</a>
                                </div>
                                <div class="flex justify-center font-kanit text-sm italic font-light mt-2">
                                    <?php $fileSize = get_sub_field('file_size'); ?> 
                                    <span>File size: <?php echo $fileSize; ?></span>
                                </div>
                            </div>
                            <!-- How to download instructions -->
                            <div class="singlePost_howToInstall__wrapper mb-10">
                                <h2 class="font-kanit text-black font-normal text-start text-3xl mb-3">How to install:</h2>
                                <ul class="howToInstall_instructions font-light text-start text-xl text-black font-kanit">
                                    <?php $nameSoftware = get_sub_field('name_of_the_software'); ?>
                                    <li>Download <?php echo $nameSoftware; ?> <a href="<?php echo site_url('/how-to-download')?>">(Instructions for downloading).</a></li>
                                    <li>Locate and double click the .exe file. (It will usually be in your Downloads folder).</li>
                                    <li>A dialog box will appear. Follow the instructions to install the software.</li>
                                    <li>Activate software using serial number provided in .txt file.</li>
                                    <li>After activation software is ready to be launched. You can open it from your Desktop.</li>
                                </ul>
                            </div>
                            <!-- FAQ section -->
                            <div class="faq_wrapper">
                            <h2 class="font-kanit text-black font-normal text-start text-3xl mb-3">Frequently Asked Questions:</h2>
                            <ul class="mb-4 font-kanit text-black font-light text-xl">
                                <li class="font-normal">Q: What is inside the .rar file?</li>
                                <li>A: There is <?php echo $nameSoftware; ?> which you need to extract with Winrar.</li>
                            </ul>
                            <ul class="mb-4 font-kanit text-black font-light text-xl">
                                <li class="font-normal">Q: Why Human Verification?</li>
                                <li>A: Human Verification is there to protect our links from spammers and bad intoned people, and to make sure that our site stays online for people to use.</li>
                            </ul>
                            <ul class="mb-4 font-kanit text-black font-light text-xl">
                                <li class="font-normal">Q: But how you will avoid spammers and bad intoned people?</li>
                                <li>A: Simple, only interested people would download and take some time to complete Human Verification whcih acts as a filter. </li>
                            </ul>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <!-- Social Media share -->
                    <div class="share-buttons-container mt-14">
                        <div class="share-list">
                            <!-- FACEBOOK -->
                            <a class="fb-h" onclick="return fbs_click()" target="_blank">
                            <img src="https://img.icons8.com/material-rounded/96/000000/facebook-f.png">
                            </a>

                            <!-- TWITTER -->
                            <a class="tw-h" onclick="return tbs_click()"  target="_blank">
                            <img src="https://img.icons8.com/material-rounded/96/000000/twitter-squared.png">
                            </a>

                            <!-- LINKEDIN -->
                            <a class="li-h" onclick="return lbs_click()"  target="_blank">
                            <img src="https://img.icons8.com/material-rounded/96/000000/linkedin.png">
                            </a>

                            <!-- REDDIT -->
                            <a class="re-h" onclick="return rbs_click()" target="_blank">
                            <img src="https://img.icons8.com/ios-glyphs/90/000000/reddit.png">
                            </a>

                            <!-- PINTEREST -->
                            <a data-pin-do="buttonPin" data-pin-config="none" class="pi-h" onclick="return pbs_click()" target="_blank">
                            <img src="https://img.icons8.com/ios-glyphs/90/000000/pinterest.png">
                            </a>
                        </div>
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

<script>
let clickCount = 0;
let customLink = '';

function handleClick() {
    clickCount++;
    if (clickCount === 1) {
        call_locker();
    } else if (clickCount === 2) {
        window.location.href = customLink;
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('locker_button').addEventListener('click', handleClick);
    customLink = document.getElementById('locker_button').getAttribute('data-custom-link');
});
</script>

<?php get_footer(); ?>