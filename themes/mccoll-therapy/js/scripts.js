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

    jQuery(window).bind('scroll', function() {
        scrollTop = $(window).scrollTop();
        newHeight = scrollTop + 100;
    });

    jQuery('.popup-trigger').click(function(e) {
        e.stopPropagation();
        if (jQuery(window).width() < 767) {
            $(this).after($(this).nextAll('.popup:first'));
            $(this).nextAll('.popup:first').show().addClass('popup-mobile').css('top', 0);
            $('html, body').animate({
                scrollTop: $(this).nextAll('.popup:first').offset().top
            }, 500);
        } else {
            $('.popup').hide();
            $(this).nextAll('.popup:first').removeClass('popup-mobile').css('top', newHeight).toggle();
        };
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
