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

<header class="container bg-slate py-1 mx-auto my-5 rounded-xl">
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
                        'container_class' => 'header-menu font-kanit font-medium text-lg',
                        )
                    );
                    ?>
            </div>
        </div>
    </div>
</header>