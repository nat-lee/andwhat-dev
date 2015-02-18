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
    <link rel="icon" type="image/png" href="../favicon.ico">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php dynamic_sidebar( 'subscribe-sidebar' );?>
<div class="navigation main-pages clear">
    <a href="#menu" class="icon-menu"></a>
    <a href="<?php echo get_site_url(); ?>" class="icon-andwhat"></a>
    <nav id="menu" class="clear">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
    </nav>
</div>
