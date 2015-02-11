<?php
/*
 * Template Name: Home Page
*/

get_header('home');

$params = array(
        'limit'   => 6,  // Limit to 6 Rows
        'orderby' => 'date ASC',
        'where'=> "category.slug='latest-work'"
    );

    // Create and find in one shot
    $latestWork = pods( 'project', $params );

?>

    <div class="wrapper">
        <div class="latest-work">
            <h2>Latest Work</h2>
            <div class="work-thumbnails clear">
                <?php while( $latestWork->fetch()) { ?>
                <div class="thirds ">
                    <a href="<?php echo get_site_url(); ?>/work/<?php echo $latestWork->display('slug')?>">
                        <div class="slides">
                            <img src="<?php echo $latestWork->display('front_thumbnail_image')?>"/>
                            <img class="secondary" src="<?php echo $latestWork->display('first_image')?>"/>
                            <img class="secondary" src="<?php echo $latestWork->display('second_image')?>"/>
                        </div>
                        <h3><?php echo $latestWork->display('title')?></h3>
                        <p><?php echo $latestWork->display('type_of_project')?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div><!--wrapper-->

<?php get_footer(); ?>
