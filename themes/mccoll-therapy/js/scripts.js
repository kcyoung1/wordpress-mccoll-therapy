jQuery(document).ready(function($) {

    // Mobile Menu
    $('.tcon').click(function(event) {
          $(this).toggleClass('tcon-transform');
          $('.mobile-nav').toggleClass('active');
          $('.nav-button').toggleClass('active');
    });


    // Smooth Scrolling

    jQuery('a[href*=#]:not([href=#])').click(function() {
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

    var $window = jQuery(window); //You forgot this line in the above example

    jQuery('div[data-type="background"]').each(function() {
        var $bgobj = jQuery(this); // assigning the object
        jQuery(window).scroll(function() {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            // Put together our final background position
            var coords = '50% ' + yPos + 'px';
            // Move the background
            $bgobj.css({
                'background-position': coords
            });
        });
    });

    // BxSlider

    $('.bxslider').bxSlider({
        controls: false,
        auto: true
    });

    $('.bxslider-profile').bxSlider({
        controls: false
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
        $('.popup').hide();
        $(this).nextAll('.popup:first').css('top', newHeight).toggle();
    });

    $('html').click(function() {
        $('.popup').hide();
    });

    $('.popup-btn-close').click(function(e) {
        $(this).parent().hide();
    });

    $('.popup').click(function(e) {
        e.stopPropagation();
    });
});
