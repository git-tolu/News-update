$(".sidebar .container-fluid ul li a").on('click', function () {
    $(".sidebar .container-fluid ul li a.active").removeClass('active');
    $(this).addClass('active');
});
$(".open-btn").on('click', function () {
    $(".fullnav").addClass('active');
    $(".topnav").removeClass("sticky-top");
    // $(".fullnav").toggleClass('collapse');
})
$(".close-btn").on('click', function () {
    $(".fullnav").removeClass('active');
    $(".topnav").addClass("sticky-top");
})

$(".slimnav").on('click', function(){
    // $(".sidebar").toggleClass('collapse');
    // $("#side_nav").addClass("bignav");
    // $(".silmsidebar").show()
    // $("#side_nav").toggleClass("bignav");
    $(".silmsidebar").toggle();
})

