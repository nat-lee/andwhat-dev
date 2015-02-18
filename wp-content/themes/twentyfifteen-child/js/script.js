// Generates Random Background
var images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg'];
 $('.header-image').css({'background-image': 'url(wp-content/themes/twentyfifteen-child/img/slider/' + images[Math.floor(Math.random() * images.length)] + ')'});

 $(document).ready(function(){

    //mobile menu
    $("#menu").mmenu({
        offCanvas: {
           position  : "top",
           zposition : "front"
        }
        }, {
        // duplicates menu for desktop and mobile
        clone: true
    });

    //close button on mobile menu
    $('.close a').click(function(){
    //alert('click);
    $('#mm-nav_primary').trigger("close.mm");
    });

    //fixed homepage navigation
    $('.home .wrapper').waypoint(function(direction){
        $('.navigation.home, .andwhat-triangle, .icon-andwhat, .icon-menu').toggleClass('home-fixed-navigation', direction === 'down');
        $('.navigation.home, .andwhat-triangle, .icon-andwhat, .icon-menu').toggleClass('fixed');
    })

    //all other fixed navigation
    $('.andwhat-we-do-header').waypoint(function(direction){
        $('.navigation, .icon-andwhat, .icon-menu').toggleClass('fixed-navigation', direction === 'down');
    })

    //all other fixed navigation
    $('.wrapper').waypoint(function(direction){
        $('.navigation, .icon-andwhat, .icon-menu').toggleClass('fixed-navigation', direction === 'down');
    })

    //overview fixed
    $('.overview').waypoint(function(direction){
        $('.overview').toggleClass('fixed-overview', direction === 'down');
    })

    $('.work-details-buttons').waypoint({
        offset:$('.overview').height()+ 550,
        handler:(function(direction){
            $('.overview').toggleClass('fixed-overview');
            $('.overview').toggleClass('reached-bottom');
        })
    });

    //scroll to bottom button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 200) {
            $('span.icon-back-to-top').fadeIn();
            //$('span.icon-scroll-to-bottom').fadeOut();
        } else {
            //$('span.icon-scroll-to-bottom').fadeIn();
            $('span.icon-back-to-top').fadeOut();

        }
    });

    $("span.icon-scroll-to-bottom").click(function() {
        $("html, body").animate({ scrollTop: $(document).height() }, "slow");
        return false;
    });

    $('span.icon-back-to-top').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });


    //subscribe form popup
    $('.icon-subscribe a').click(function(){
        $('.subscribe-form').slideDown('slow');
        $('.navigation.main-pages').css('position','static');
        $('.about-header-image').css('margin-top','0');
        $('.page-template-page-work .wrapper').css('margin-top','100px');
        $('.pod-page-work-w .header').css('margin-top','0');
    });
    $('a.close').click(function(){
        $('.subscribe-form').slideUp('slow');
        $('.navigation.main-pages').css('position','fixed');
        $('.about-header-image').css('margin-top','117px');
        $('.page-template-page-work .wrapper').css('margin-top','217px');
        $('.pod-page-work-w .header').css('margin-top','117px');
    });

    $(window).scroll(function(){
        $('.navigation.main-pages').css('position','fixed');
    })

    //subscribe from error message
    $('.epm-sign-up-form').click(function(){
        $('.epm-message p').css('display','none');
    });

     // configure the cycle plugin
    $('.slides').cycle({
         fx: 'fade',
         speed:   800,
         timeout: 800,
         pause:   0
    });

    $('.slides').cycle('pause');
        $('.slides').hover(function () {
            //console.log('hovered');
            //mouse enter - Resume the slideshow
            $(this).cycle('resume');
        },
        function () {
            //mouse leave - Pause the slideshow
            $(this).cycle('pause');
            $(this).cycle(0);
            return false;
    });

     //about page transition
     $('li.andwhat-we-do-button a').click(function(){
        // alert('click what we do');
        $('li.andwhat-we-do-button').addClass('active');
        $('li.andwho-we-do-button').removeClass('active');
        $('img.andwhat-we-do-header').fadeIn(500);
        $('img.andwho-we-do-header').fadeOut(500);
        $('.andwhat-we-do').fadeIn(500);
        $('.andwho-we-do').fadeOut(500);
     });
     $('li.andwho-we-do-button a').click(function(){
        //alert('click who we do');
        $('li.andwho-we-do-button').addClass('active');
        $('li.andwhat-we-do-button').removeClass('active');
        $('img.andwho-we-do-header').fadeIn(500);
        $('img.andwhat-we-do-header').fadeOut(500);
        $('.andwho-we-do').fadeIn(500);
        $('.andwhat-we-do').fadeOut(500);
     });

     //contact popup
     $(".contact-link").fancybox({
        'type' :'iframe',
        'width':'100%',
        'height': 'auto',
        'padding':0,
        'margin':0,
         'href' :'http://nat.local/andwhat-dev/contact/'
     });
});
