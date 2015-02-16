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
<span class="icon-scroll-to-bottom"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>
<span class="icon-back-to-top"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
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
                        <div class="slides">
                            <img src="<?php echo $workDetails->display('front_thumbnail_image')?>"/>
                            <img class="secondary" src="<?php echo $workDetails->display('first_image')?>"/>
                            <img class="secondary" src="<?php echo $workDetails->display('second_image')?>"/>
                        </div>
                        <h3><?php echo $workDetails->display('title')?></h3>
                        <p><?php echo $workDetails->display('type_of_project')?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div><!--wrapper-->

<?php get_footer()?>