<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $missing_pets_directory_description = get_bloginfo( 'description', 'display' );
            if ( $missing_pets_directory_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $missing_pets_directory_description; /* WPCS: xss ok. */ ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        
    </header><!-- #masthead -->

    <div id="content" class="site-content">
