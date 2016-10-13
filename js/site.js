$(document).ready(function() {
    $("#wrapper_product").owlCarousel({
        autoPlay: true,
        navigation: true, // Show next and prev buttons
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        navigationText: ["<img src='images/left_arrow.png'>", "<img src='images/right_arrow.png'>"],

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false
    });


    $('#menu a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('.cv-menu').on('click', function() {
        if (!$(this).hasClass('focus')) {
            $(this).addClass('focus');
            $('#menu ul').addClass('open');
        } else {
            $(this).removeClass('focus');
            $('#menu ul').removeClass('open');
        }
        return false;
    });
    if ($(window).scrollTop() <= 10) {
        $('._goToTop').hide(0);
    }
    $(window).on('scroll', function() {
        var td = $(this).scrollTop();
        if (td == 0) {
            $('._goToTop').fadeOut(200);
        } else {
            $('._goToTop').fadeIn(200);
        }
    });

    $('._goToTop').on('click', function() {
        $('html, body').animate({
            scrollTop: 0
        }, 500);
    });
});
