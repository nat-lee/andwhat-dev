<?php
/*
 * Template Name: Contact Page
*/
    get_header('contact');

    $params = array(
        'limit'   => 2,  // Return two rows
    );

    // Create and find in one shot
    $locations = pods( 'contact', $params );
?>

<div class="wrapper">
    <div class="contact-details">
        <div class="heading">
            <h2>Get In</h2>
            <h1>Touch</h1>
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
        <div class="row clear">
            <?php while( $locations->fetch()) { ?>
            <div class="halves">
                <img src="<?php echo $locations->display('location_image')?>"/>
                <div class="content <?php echo $locations->display('slug')?>">
                    <?php echo $locations->display('address');?>
                    <ul class="phone">
                        <li class="icon-phone clear"><span class="text"><?php echo $locations->display('phone_number')?></span></li>
                        <li class="icon-phone second clear"><span class="text"><?php echo $locations->display('phone_number_2')?></span></li>
                    </ul>
                    <ul class="buttons">
                        <li>
                            <a class="button" href="<?php echo $locations->display('view_map_link')?>" target="_blank"><?php echo $locations->display('view_map_label')?></a>
                        </li>
                        <li>
                            <a class="button" href="mailto:what@andwhat.com">Email Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <?php }?>
            <a href="https://www.facebook.com/andwhatdotcom" target="-blank" class="icon-facebook clear">
                <span class="path1"></span><span class="path2"></span>
            </a>
        </div>
    </div>
</div><!--wrapper-->
<?php wp_footer(); ?>
</body>
</html>