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