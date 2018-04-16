<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package clean-blogging
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'clean-blogging' ); ?></a>

    <header id="masthead" class="site-header">
        <div class="wrap">
            <div class="site-branding">
              <a href="https://digitalposition.com/"><img src="../images/Digital-Position-Logo.png">

                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif; ?>
                </a>				
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" style="width: 20px; height: 0px; background: url('../images/menu.png') center no-repeat;"><?php esc_html_e( 'Primary Menu', 'clean-blogging' ); ?></button>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary-menu',
                        'menu_id'        => 'primary-menu',
                    ) );
                ?>
            </nav><!-- #site-navigation -->
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content">
        <div class="wrap">
