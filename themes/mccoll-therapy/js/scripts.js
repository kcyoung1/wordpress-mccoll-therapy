jQuery(document).ready(function($) {

    // Mobile Menu

    $('.tcon').click(function(event) {
          $(this).toggleClass('tcon-transform');
          $('.mobile-nav').toggleClass('active');
          $('.nav-button').toggleClass('active');
          $('body').toggleClass('active');
    });

    $('.focus').click(function(event){
        $('.mobile-nav').toggleClass('active');
        $('.tcon').toggleClass('tcon-transform');
        $('body').toggleClass('active');
    });


    // Smooth Scrolling

    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

            var target = jQuery(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                jQuery('html,body').animate({
                    scrollTop: target.offset().top - 70
                }, 1000);
                return false;
            }
        }
    });

    // Parallax Scrolling
    var templateUrl = object_name.templateUrl;
    var heroBanner = '/assets/images/banner.jpg';
    var wellnessBanner = '/assets/images/dimensions-banner.jpg';

    $('.hero-banner').parallax({imageSrc: templateUrl + heroBanner});
    $('.wellness-banner').parallax({imageSrc: templateUrl + wellnessBanner});

    // BxSlider

    $('.bxslider').bxSlider({
        controls: false,
        auto: true
    });

    $('.bxslider-profile').bxSlider({
        controls: false
    });

    // Accordian

    $('.accordian-content').on('click', 'button', function() {
        $(this).parent().parent().find('.expand-content').slideToggle();
    });

    // Popup Windows

    var scrollTop = '';
    var newHeight = '100';

    $(window).bind('scroll', function() {
        scrollTop = $(window).scrollTop();
        newHeight = scrollTop + 100;
    });

    $('.popup-trigger').click(function(e) {
        e.stopPropagation();
        $('.popup').fadeOut(300);
        $('body').toggleClass('active');
        $('.overlay').toggleClass('active');
        $(this).nextAll('.popup:first').css('top', newHeight).fadeIn(300);
    });

    $('.overlay').click(function() {
        $('.popup').fadeOut(300);
        $('.cover').fadeOut(300);
        $('body').toggleClass('active');
        $(this).toggleClass('active');
    });

    $('.popup-btn-close').click(function(e) {
        $('.cover').fadeOut(300);
        $('body').toggleClass('active');
        $('.overlay').toggleClass('active');
        $(this).parent().fadeOut(300);
    });

    $('.popup').click(function(e) {
        e.stopPropagation();
    });
});
