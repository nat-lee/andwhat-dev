<?php
/*
 * Template Name: Work Page
*/
    get_header();

    $params = array(
        'limit'   => -1,  // Unlimited Rows
        'orderby' => 'date ASC'
    );

    // Create and find in one shot
    $workDetails = pods( 'project', $params );

?>

<div class="wrapper">
        <div class="latest-work">
            <div class="heading">
                <h2>Our</h2>
                <h1>Work</h1>
                <?php
                // Start the loop.
                    while ( have_posts() ) : the_post();
                ?>
                <p><?php the_content()?></p>

                <?php
                    // End the loop.
                    endwhile;
                ?>
            </div>
            <div class="work-thumbnails clear">
                <?php while( $workDetails->fetch()) { ?>
                <div class="thirds">
                    <a href="<?php echo get_site_url(); ?>/work/<?php echo $workDetails->display('slug')?>">
                        <img src="<?php echo $workDetails->display('front_thumbnail_image')?>"/>
                        <h3><?php echo $workDetails->display('title')?></h3>
                        <p><?php echo $workDetails->display('type_of_project')?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div><!--wrapper-->

<?php get_footer()?>