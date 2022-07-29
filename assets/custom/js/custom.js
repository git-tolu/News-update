$(document).ready(function () {
    // hover jquery
    $(".dropdown").hover(function () {
        var dropdownMenu = $(this).children(".dropdown-menu");
        if (dropdownMenu.is(":visible")) {
            dropdownMenu.parent().toggleClass("open");
        }
    });

    // shadow effect
    $(window).scroll(function () {
        var show = 100;
        if ($(this).scrollTop() > show) {
            $(".navbar").css('box-shadow', '0px 0px 20px rgba(0, 0, 0, 0.653)');
        } else {
            $(".navbar").css('box-shadow', '');
        }
    })

    // $(".bor").hide();
    // $(".rec").hover(function () {
    //         // over
    //         $(".bor").show();
    //     }, function () {
    //         // out
    //         $(".bor").hide();
    //     }
    // );
    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });

    // user login and registragion animation
    $('.link').click(function () {
        $('form').animate({ height: "toggle", });
    });

    // mobile menu javascript
    $(".fa-ellipsis-v").click(function (e) {
        e.preventDefault();
        $(".fa-times").show();
        $(".fa-ellipsis-v").hide();
    });
    $(".fa-times").click(function (e) {
        e.preventDefault();
        $(".fa-times").hide();
        $(".fa-ellipsis-v").show();
    });

    $(".arrowHover").hover(function () {
        // over
        $(".arrow").removeClass("fa-angle-right");
        $(".arrow").addClass("fa-angle-down");
    }, function () {
        // out
        $(".arrow").addClass("fa-angle-right");
        $(".arrow").removeClass("fa-angle-down");
    });
});



