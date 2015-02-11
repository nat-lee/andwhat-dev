<?php
/*
 * Template Name: About Page
*/
//echo "This is a about detail page for : " . pods_v( 'last', 'url' );

get_header(); ?>

<?php
    $params = array(
        'limit'   => 1  // Return all rows
    );

    // Create and find in one shot
    $about = pods( 'about', $params );
    if ( 0 < $about->total() ) {
        while ( $about->fetch() ) {
?>
<div class="about-header-image clear">
    <img class="andwhat-we-do-header" src="<?php echo $about->display('andwhat_we_do_image_header');?>"/>
    <img class="andwho-we-do-header" src="<?php echo $about->display('andwho_we_do_image_header');?>"/>
</div>

<div class="subnavigation">
    <?php wp_nav_menu( array( 'theme_location' => 'about-menu' ) ); ?>
</div>

<div class="wrapper clear">
    <div class="container andwhat-we-do">
        <div class="thirds">
            <div class="inner">
                <h3><span>Andwhats</span></h3>
                <h2>The idea</h2>
                <p>
                    <?php echo $about->display('andwhats_the_idea');?>
                </p>
            </div>
        </div>
        <div class="thirds middle">
            <div class="inner">
                <h3><span>Andwhats</span></h3>
                <h2>For you</h2>
                <p>
                    <?php echo $about->display('andwhats_for_you');?>
                </p>
            </div>
        </div>
        <div class="thirds">
            <div class="inner">
                <h3><span>Andwhats</span></h3>
                <h2>Technical</h2>
                <p>
                   <?php echo $about->display('andwhats_technical');?>
                </p>
            </div>
        </div>
    </div>

    <div class="container andwho-we-do">
        <p>
            <?php echo $about->display('andwho_we_do');?>
        </p>
        <div class="client-logos">
            <img src="<?php echo $about->display('client_logos');?>"/>
        </div>
    </div>
</div>

<?php
        } // end of about loop
    } // end of found books
?>

<?php get_footer(); ?>