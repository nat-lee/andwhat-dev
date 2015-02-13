<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <script>(function(){document.documentElement.className='js'})();</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php dynamic_sidebar( 'subscribe-sidebar' );?>
<div class="header-image">
    <div class="home-navigation">
        <img class="andwhat-triangle" src="<?php bloginfo('stylesheet_directory'); ?>/img/andwhat-triangle-logo.png" alt="Andwhat"/>
        <a href="#menu" class="icon-menu"></a>
        <a href="<?php echo get_site_url(); ?>" class="icon-andwhat"></a>
        <div class="navigation home clear">
            <nav id="menu">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
        </div>
    </div>
    <div class="header-text-wrapper">
        <div class="inner">
            <div class="text">
                <h1>Andwhat</h1>
                <p><?php
                        $key_name = get_post_custom_values($key = 'introduction');
                        echo $key_name[0];
                   ?>
                 </p>
            </div>
        </div>
    </div>
</div>
