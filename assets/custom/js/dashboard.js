$(".sidebar .container-fluid ul li a").on('click', function () {
    $(".sidebar .container-fluid ul li a.active").removeClass('active');
    $(this).addClass('active');
});
$(".open-btn").on('click', function () {
    $(".sidebar").addClass('active');
    // $(".sidebar").toggleClass('collapse');
})
$(".close-btn").on('click', function () {
    $(".sidebar").removeClass('active');
})

