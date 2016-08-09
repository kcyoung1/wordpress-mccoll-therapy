jQuery(document).ready(function($) {

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
