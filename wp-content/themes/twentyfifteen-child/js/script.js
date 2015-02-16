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

    //fixed homepage navigation
    $('.home .wrapper').waypoint(function(direction){
        $('.navigation.home, .andwhat-triangle, .icon-andwhat, .icon-menu').toggleClass('home-fixed-navigation', direction === 'down');
    })

    //all other fixed navigation
    $('.wrapper').waypoint(function(direction){
        $('.navigation, .icon-andwhat, .icon-menu').toggleClass('fixed-navigation', direction === 'down');
    })

    //overview fixed
    $('.overview .inner').waypoint(function(direction){
        $('.overview .inner').toggleClass('fixed-overview', direction === 'down');
    })

    $('.work-details-buttons').waypoint({
        offset:$('.overview .inner').height()+200,
        handler:(function(direction){
            $('.overview .inner').toggleClass('fixed-overview');
            $('.overview .inner').toggleClass('inner-reached-bottom');
            $('.overview').toggleClass('reached-bottom');
        })
    });

    //scroll to bottom button
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('span.icon-back-to-top').fadeIn();
            $('span.icon-scroll-to-bottom').fadeOut();
        } else {
            $('span.icon-scroll-to-bottom').fadeIn();
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
    });
    $('a.close').click(function(){
        $('.subscribe-form').slideUp('slow');
    });

     // configure the cycle plugin
    $('.slides').cycle({
         fx: 'fade',
         speed:   400,
         timeout: 200,
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
        'padding':0,
        'margin':0,
         'href' :'http://nat.local/andwhat-dev/contact/'
     });
});
