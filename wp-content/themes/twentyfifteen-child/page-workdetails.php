<?php
/*
 * Template Name: Work Details Page
*/
    // Create and find in one shot
    $moreWork = pods( 'project');
    $moreWork->find('RAND()', 6);

    $moreWorkThumbs = pods('project');
    $moreWorkThumbs->find('RAND()', 6);

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
        <span class="icon-scroll-to-bottom"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span></span>
<span class="icon-back-to-top"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></span>
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
                            <a class="button" href="<?php echo get_site_url(); ?>/work/<?php echo $moreWork->display('slug')?>">Previous Project</a>
                        </li>
                        <li class="more-work">
                            <a class="button" href="<?php echo get_site_url(); ?>/work">More Work</a>
                        </li>
                        <li class="next">
                            <a class="button" href="<?php echo get_site_url(); ?>/work/<?php echo $moreWork->display('slug')?>">Next Project</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="more-work clear">
                <?php while( $moreWorkThumbs->fetch()) { ?>
                <div class="thirds">
                    <a href="<?php echo get_site_url(); ?>/work/<?php echo $moreWorkThumbs->display('slug')?>">
                        <div class="slides">
                            <img src="<?php echo $moreWorkThumbs->display('front_thumbnail_image')?>"/>
                            <img class="secondary" src="<?php echo $moreWorkThumbs->display('first_image')?>"/>
                            <img class="secondary" src="<?php echo $moreWorkThumbs->display('second_image')?>"/>
                        </div>
                        <h3><?php echo $moreWorkThumbs->display('title')?></h3>
                        <p><?php echo $moreWorkThumbs->display('type_of_project')?></p>
                    </a>
                </div>
                <?php }?>
            </div>
        </div><!--wrapper-->
<?php get_footer(); ?>
