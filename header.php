<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Tablet and Desktop Header -->
<header class="hidden lg:block container bg-slate py-3 mx-auto my-5 rounded-xl">
    <div class="grid grid-cols-6 gap-0 ">
        <!-- Logo -->
        <div class="col-span-1">
            <div class="logoWrapper ml-4">
                <a href="<?php echo site_url(); ?>">
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'logo-size' );
                        if ( has_custom_logo() ) {
                            echo '<img class="logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                    ?>
                </a>
            </div>
        </div>
        <!-- Nav elements -->
        <div class="col-span-5 my-auto">
            <div class="menuItems">
                    <?php 
                    wp_nav_menu(
                        array(
                        'theme_location' => 'header-menu',
                        'container_class' => 'header-menu font-kanit font-normal text-lg',
                        )
                    );
                    ?>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Header -->
<header class="">
  <nav id="navbar" class="lg:hidden w-full">
        <div class="container mx-auto">
            <div class="flex justify-between bg-slate px-10">
                <!-- LOGO SECTION -->
				<div class="site-branding">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} elseif ( $site_name ) {
						?>
						<h1 class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo('name'); ?>" rel="home">
								<?php echo esc_html( $site_name ); ?>
							</a>
						</h1>
						<p class="site-description">
							<?php
							if ( $tagline ) {
								echo esc_html( $tagline );
							}
							?>
						</p>
					<?php } ?>
				</div>
                <!-- MENU ICON -->
                <button class="nav-toggler" data-target="#navigation">
                    <svg width="35px" height="35px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path fill="#fff" d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"/></svg>
                </button>
            </div>
        </div>
        <!-- DROPDOWN CONTAINER -->
        <div class="hidden navbar_grid__dropdown w-full h-screen absolute top-0 right-0 z-10 bg-slate flex justify-between" id="navigation">
            <!-- DROPDOWN MENU -->
            <div class="header_dropdown bg-slate flex justify-center items-center w-full h-screen">
                <div class="">
                    <!-- CLOSE BUTTON -->
                    <button class="nav_close__button nav-toggler close_button text-white text-5xl p-3 absolute top-5 right-4" data-target="#navigation">&#215;</button>
                    <!-- NAVIGATION -->
                    <div class="securewarehub_mobile__header text-black font-kanit text-2xl text-center font-normal">
                        <?php 
                        wp_nav_menu(
                            array(
                            'theme_location' => 'header-menu',
                            )
                        );
                        ?>
                    </div>
                    <div class="mobile_serachBar mt-14">
                        <h3 class="font-kanit font-normal text-lg pb-4">Download your desired software for free!</h3>
                        <div id="sidebar-primary" class="sidebar">
                            <?php dynamic_sidebar( 'primary' ); ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </nav>
</header>