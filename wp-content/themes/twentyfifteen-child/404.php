<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title"><?php _e( 'Sorry!', 'twentyfifteen' ); ?></h1>
                    <h2><?php _e( 'We can&rsquo;t seem to find the page you&rsquo;re looking for', 'twentyfifteen' ); ?></h2>
                </header><!-- .page-header -->
            </section><!-- .error-404 -->

        </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php get_footer(); ?>
