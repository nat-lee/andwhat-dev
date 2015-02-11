<?php
/*
 * Template Name: Work Details Page
*/
    // Create and find in one shot
    $moreWork = pods( 'project');
    $moreWork->find('RAND()', 6);

    get_header();

?>

    <?php
        //get the current slug
        $slug = pods_v('last','url');
        //get pods object
        $work = pods('project', $slug);
    ?>
        <div class="header <?php echo $work->display( 'slug' );?>">
            <div class="white-text-box">
                <div class="inner">
                    <h1><?php echo $work->display( 'title' );?></h1>
                    <h4><?php echo $work->display( 'type_of_project' ); ?></h4>
                </div>
            </div>
        </div>

        <div class="wrapper">
            <div class="inner clear">
                <div class="introduction">
                    <img class="logo" src="<?php echo $work->display('logo');?>"/>
                    <p>
                        <?php echo $work->display('introduction_text');?>
                    </p>
                </div>
                <img class="introduction-image" src="<?php echo $work->display('introduction_image');?>"/>
                <div class="project-content clear">
                    <div class="overview" id="overview">
                        <div class="inner">
                            <h2>Overview</h2>
                            <p>
                                <?php echo $work->display('content');?>
                            </p>
                        </div>
                    </div>
                    <div class="project-images">
                        <img src="<?php echo $work->display('first_image');?>"/>
                        <img src="<?php echo $work->display('second_image');?>"/>
                        <img src="<?php echo $work->display('third_image');?>"/>
                        <img src="<?php echo $work->display('fourth_image');?>"/>
                    </div>
                </div>
                 <div class="work-details-buttons">
                    <ul class="clear">
                        <li class="previous">
                            <a class="button" href="#">Previous Project</a>
                        </li>
                        <li class="more-work">
                            <a class="button" href="<?php echo get_site_url(); ?>/work">More Work</a>
                        </li>
                        <li class="next">
                            <a class="button" href="#">Next Project</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="more-work">
                <?php while( $moreWork->fetch()) { ?>
                <div class="thirds">
                    <a href="<?php echo get_site_url(); ?>/work/<?php echo $moreWork->display('slug')?>">
                        <div class="slides">
                            <img src="<?php echo $moreWork->display('front_thumbnail_image')?>"/>
                            <img class="secondary" src="<?php echo $moreWork->display('first_image')?>"/>
                            <img class="secondary" src="<?php echo $moreWork->display('second_image')?>"/>
                        </div>
                        <h3><?php echo $moreWork->display('title')?></h3>
                        <p><?php echo $moreWork->display('type_of_project')?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div><!--wrapper-->
<?php get_footer(); ?>
