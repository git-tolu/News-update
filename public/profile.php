<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News-update Profile-page</title>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../assets/custom/css/style.css">
    <!-- OWl carousel css -->
    <link href="../assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/owl.carousel/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Transition css -->
    <link rel="stylesheet" href="../assets/plugins/aos/aos.css">
    <link href="../assets/plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- font css -->
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <!-- ===== Content ====== -->
    <!-- ===== Navbar ====== -->
    <?php include "includes/header.php" ?>
    <!-- ===== End Navbar ====== -->
    <div class="container" id="home">
        <!-- ==== Post  ==== -->
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="600">
            <div class="col-md-12">
                <h3 class="text-center rec"> Profile </h3>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <p class="bor  text-center "></p>
                </div>
            </div>
        </div>
        <!-- ROW-1 OPEN -->
        <div class="row" id="user-profile">
            <div class="col-lg-12">
                <div class="card m-2" data-aos="fade-up" data-aos-delay="600">
                    <div class="card-body">
                        <div class="wideget-user mb-2">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="row">
                                        <div class="panel profile-cover">
                                            <div class="profile-cover__action bg-img"></div>
                                            <div class="profile-cover__img">
                                                <div class="profile-img-1">
                                                    <img src="../media/users/21.jpg" width="100%" height="500px"
                                                        alt="img">
                                                </div>
                                                <div class="profile-img-content mt-3 text-dark text-start">
                                                    <div class="text-dark">
                                                        <h3 class="h3 mb-2">Percy Kewshun</h3>
                                                        <h5 class="text-muted">Web Developer</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="btn-profile">
                                                <button class="btn btn-primary mt-1 mb-1"> <i class="fa fa-rss"></i>
                                                    <span>Follow</span></button>
                                                <button class="btn btn-secondary mt-1 mb-1"> <i
                                                        class="fa fa-envelope"></i> <span>Message</span></button>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="px-0 px-sm-4">
                                            <div class="social social-profile-buttons mt-5 float-end">
                                                <div class="mt-3">
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="https://www.facebook.com/" target="_blank"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="https://twitter.com/" target="_blank"><i
                                                            class="fa fa-twitter"></i></a>
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="https://www.youtube.com/" target="_blank"><i
                                                            class="fa fa-youtube"></i></a>
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="javascript:void(0)"><i class="fa fa-rss"></i></a>
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="https://www.linkedin.com/" target="_blank"><i
                                                            class="fa fa-linkedin"></i></a>
                                                    <a class="social-icon text-white bg-primary cir p-3"
                                                        href="https://myaccount.google.com/" target="_blank"><i
                                                            class="fa fa-google-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card m-3" data-aos="fade-right" data-aos-delay="600">
                            <div class="card-body">
                                <div class="main-profile-contact-list">
                                    <div class="me-5">
                                        <div class="media mb-4 d-flex">
                                            <div class="btn btn-primary bradius me-3 mt-1">
                                                <i class="fa fa-edit fs-20 text-white"></i>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Posts</span>
                                                <div class="fw-semibold fs-25">
                                                    328
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="me-5 mt-5 mt-md-0">
                                        <div class="media mb-4 d-flex">
                                            <div class="btn btn-danger text-white me-3 mt-1">
                                                <span class="">
                                                    <i class="fa fa-comment fs-20"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Comments</span>
                                                <div class="fw-semibold fs-25">
                                                    937k
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="me-0 mt-5 mt-md-0">
                                        <div class="media mb-4 d-flex">
                                            <div class="btn btn-primary text-white bradius me-3 mt-1">
                                                <span class="">
                                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAIAAAC0Ujn1AAAABmJLR0QA/wD/AP+gvaeTAAAC+UlEQVRIie1WW0hUURRd+47OOOUoooZihFpSkqYS9lCsRIPUNG16aR9pHxmZon30QEx8UGB+9JGjYkgRjEGlEWKKBSVpRJQPFDNSQcqEmQ/NyWczpw9H72OuYyB+CK2vc/fZe+1199ln30uaHDPWBtwa8f6ntoWD/e2wLUgIoj1+CPQiVzUATEyjf4x9GEZjD+v+bi+WluuQ+CC6EUchm+0Fd47gdjNr7mP/Sr1tE8qOU2wg2WMVoKWPXatnQ8aVqLVhpEsjtZK3GCZR1cZa+tg3gzXxkZ2UGUWeGt7n9ywu6VlDl0g+T02Emwl0JZZIILehi2XpmWlWqshZBV0aJYfyroyhvJWVNjG2yK9Q7S1c4L2jpexoKW/6Azb3R6YIc2Y870agF3Z40ZKyyK3kpsarL1Yfa/OVHqMLUaLiGiaRpecl2IIxZNUxo0lkvHiQihKJp86IoOxo6aFVtfF1UCpQnERfS7iBYq4okZQKq31yBtVt0uS5MXRuPwHggn1QppVpBmFL5cdTbgx5ucDbFXmxlB/P+7+U67zyExTsA64ilVPJ3ZthQTOdCRflFj4OGWRiVQ6oSOU4xequOi3T/Q4KcNfrLbJn5e/Brx9/FHnUCR79PGALxnD1mUUxFlDotgHhvtLsoxNoH7SuOwbhqICvO5lmcf8du9XEzIvkGREUFSCNrXzLajtAmhyzUoHGy9w+f9G2YRIhJRbbyyKEixrdBZz7RpHx/RCO3rPMm8EBmDPjVI2ld1Tk4amBLo2WKyUAIuhSScLbO4rTNZZ5M7B0ZcankFJp6RwR+SWH0sN00jjJ632UQUkhosydI0iptIxPLeYWjie1I3RnSRsmCjCaUN3GmpfGkyfigijzgFTv088sS8+m5wWvJZl8RDi5m0qSyNtVvg62+DmBghfsySfpVJD/FDirkBdL5yOl0iQwmlDbzu6+lhmNy1IvQOWAQ9vpcCB2+ZC/J1ycAODXDIYM6PnBWvvxZoDNys3FlalXifX5s7A+qf8CwKkOpZNGeaUAAAAASUVORK5CYII="
                                                        width="18" height="18">
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <span class="text-muted">Views</span>
                                                <div class="fw-semibold fs-25">
                                                    2,876
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card m-3" data-aos="fade-right" data-aos-delay="800">
                            <div class="card-header">
                                <div class="card-title">About</div>
                            </div>
                            <div class="card-body">
                                <div>
                                    <h5>Bio<i class="fa fa-edit-3 text-primary mx-2"></i></h5>
                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of
                                        itself, because it is pain, but because occasionally circumstances occur in
                                        which toil and pain can procure him some great pleasure.
                                        <a href="javascript:void(0)">Read more</a>
                                    </p>
                                </div>
                                <hr>
                                <div class="d-flex align-items-center mb-3 mt-3">
                                    <div class="me-4 text-center text-primary">
                                        <span> <i class="fa fa-briefcase fs-20" aria-hidden="true"></i> </span>
                                    </div>
                                    <div>
                                        <strong>San Francisco, CA </strong>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mt-3">
                                    <div class="me-4 text-center text-primary">
                                        <span><img
                                                src="data:image/png;base64,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"
                                                width="20" height="20">
                                        </span>
                                    </div>
                                    <div>
                                        <strong>Francisco, USA</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card m-3" data-aos="fade-up" data-aos-delay="600">
                            <div class="card-body">
                                <form class="profile-edit">
                                    <textarea class="form-control" placeholder="What's in your mind right now"
                                        rows="7"></textarea>
                                    <div class="profile-share border-top-0">
                                        <div class="mt-2">
                                            <a href="javascript:void(0)" class="me-2" title="Audio"
                                                data-bs-toggle="tooltip" data-bs-placement="top"><span
                                                    class="text-muted"> <i class="fa fa-microphone"
                                                        aria-hidden="true"></i></span></a>
                                            <a href="javascript:void(0)" class="me-2" title="Video"
                                                data-bs-toggle="tooltip" data-bs-placement="top"><span
                                                    class="text-muted"> <i class="fa fa-video-camera"
                                                        aria-hidden="true"></i> </span></a>
                                            <a href="javascript:void(0)" class="me-2" title="Image"
                                                data-bs-toggle="tooltip" data-bs-placement="top"><span
                                                    class="text-muted"><i class="fa fa-image"></i></span></a>
                                        </div>
                                        <button class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i>
                                            Share</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card m-3 border p-0 shadow-none" data-aos="fade-up" data-aos-delay="800">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="media mt-0">
                                        <div class="media-user me-2">
                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md"
                                                    src="../media/users/21.jpg"></div>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                            <small class="text-muted">Sep 26 2019, 10:14am</small>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <!-- <div class="dropdown show">
                                            <button class="btn text-white " type="button"
                                                id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="fa fa-ellipsis-v text-dark" aria-hidden="true"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-start" aria-labelledby="triggerId">
                                                <a class="dropdown-item" href="javascript:void(0)">Edit Post</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Delete Post</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Personal
                                                    Settings</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <div class="d-flex">
                                        <a href="gallery.html" class="w-30 m-2"><img src="../media/users/21.jpg"
                                                alt="img" class="br-5"></a>
                                        <a href="gallery.html" class="w-30 m-2"><img src="../media/users/21.jpg"
                                                alt="img" class="br-5"></a>
                                    </div>
                                    <h4 class="fw-semibold mt-3">There is nothing more beautiful.</h4>
                                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but
                                        the majority have suffered alteration in some form, by injected humour, or
                                        randomised words which don't look even slightly believable.
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer user-pro-2">
                                <div class="media mt-0">
                                    <div class="media-user me-2">
                                        <div class="avatar-list avatar-list-stacked">
                                            <span class="avatar brround"
                                                style="background-image: url(../media/users/21.jpg)"></span>
                                            <span class="avatar brround"
                                                style="background-image: url(../media/users/21.jpg)"></span>
                                            <span class="avatar brround"
                                                style="background-image: url(../media/users/21.jpg)"></span>
                                            <span class="avatar brround"
                                                style="background-image: url(../media/users/21.jpg)"></span>
                                            <span class="avatar brround"
                                                style="background-image: url(../media/users/21.jpg)"></span>
                                            <span class="avatar brround text-primary">+28</span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                    </div>
                                    <div class="ms-auto">
                                        <div class="d-flex mt-1">
                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span
                                                    class=""><i class="fe fe-heart"></i></span></a>
                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span
                                                    class=""><i class="fe fe-message-square"></i></span></a>
                                            <a class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i
                                                        class="fe fe-share-2"></i></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card m-3" data-aos="fade-left" data-aos-delay="600">
                            <div class="card-header">
                                <div class="card-title">Recent Uploads</div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="media media-xs overflow-visible">
                                        <img class="avatar bradius avatar-xl me-3" src="../media/users/21.jpg"
                                            width="50px" alt="avatar-img">
                                        <div class="media-body valign-middle">
                                            <a href="javascript:void(0)"
                                                class="text-decoration-none fw-semibold text-dark">John Paige</a>
                                            <p class="text-muted mb-0">There are many variations of passages of Lorem
                                                Ipsum available ...</p>
                                        </div>
                                    </div>
                                    <div class="media media-xs overflow-visible mt-5">
                                        <img class="avatar bradius avatar-xl me-3" src="../media/users/21.jpg"
                                            width="50px" alt="avatar-img">
                                        <div class="media-body valign-middle">
                                            <a href="javascript:void(0)"
                                                class="text-decoration-none fw-semibold text-dark">Peter Hill</a>
                                            <p class="text-muted mb-0">There are many variations of passages of Lorem
                                                Ipsum available ...</p>
                                        </div>
                                    </div>
                                    <div class="media media-xs overflow-visible mt-5">
                                        <img class="avatar bradius avatar-xl me-3" src="../media/users/21.jpg"
                                            width="50px" alt="avatar-img">
                                        <div class="media-body valign-middle">
                                            <a href="javascript:void(0)"
                                                class="text-decoration-none fw-semibold text-dark">Irene Harris</a>
                                            <p class="text-muted mb-0">There are many variations of passages of Lorem
                                                Ipsum available ...</p>
                                        </div>
                                    </div>
                                    <div class="media media-xs overflow-visible mt-5">
                                        <img class="avatar bradius avatar-xl me-3" src="../media/users/21.jpg"
                                            width="50px" alt="avatar-img">
                                        <div class="media-body valign-middle">
                                            <a href="javascript:void(0)"
                                                class="text-decoration-none fw-semibold text-dark">Harry Fisher</a>
                                            <p class="text-muted mb-0">There are many variations of passages of Lorem
                                                Ipsum available ...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- COL-END -->
        </div>
        <!-- ROW-1 CLOSED -->
        <!-- ==== end Posts ==== -->
        <!-- ===== swiper carousel ======= -->
        <div id="about" class="row my-5" data-aos="fade-down" data-aos-delay="400">
            <div class="col-md-12">
                <h3 class="text-center rec">Related posts </h3>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <p class="bor  text-center "></p>
                </div>
            </div>
        </div>
        <div class="testimonials-slider swiper my-5" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="card  box" style="max-width: 500px;">
                        <div class="row g-0 ">
                            <div class="col-sm-5 ">
                                <img src="../media/landing/—Pngtree—personal blog_2853664.png"
                                    class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-cappitalize">Lorem ipsum ...</h5>
                                    <p class="card-texttext-cappitalize">alwats code as if the guy who ends up
                                        maintaining your code will be a violent psychopath who knows where you live...
                                    </p>
                                    <a href="#" class="btn btn-outline-primary stretched-link"> <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="card  box" style="max-width: 500px;">
                        <div class="row g-0 ">
                            <div class="col-sm-5 ">
                                <img src="../media/landing/—Pngtree—personal blog_2853664.png"
                                    class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-cappitalize">Lorem ipsum ...</h5>
                                    <p class="card-texttext-cappitalize">alwats code as if the guy who ends up
                                        maintaining your code will be a violent psychopath who knows where you live...
                                    </p>
                                    <a href="#" class="btn btn-outline-primary stretched-link"> <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="card  box" style="max-width: 500px;">
                        <div class="row g-0 ">
                            <div class="col-sm-5 ">
                                <img src="../media/landing/—Pngtree—personal blog_2853664.png"
                                    class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-cappitalize">Lorem ipsum ...</h5>
                                    <p class="card-texttext-cappitalize">alwats code as if the guy who ends up
                                        maintaining your code will be a violent psychopath who knows where you live...
                                    </p>
                                    <a href="#" class="btn btn-outline-primary stretched-link"> <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="card  box" style="max-width: 500px;">
                        <div class="row g-0 ">
                            <div class="col-sm-5 ">
                                <img src="../media/landing/—Pngtree—personal blog_2853664.png"
                                    class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-cappitalize">Lorem ipsum ...</h5>
                                    <p class="card-texttext-cappitalize">alwats code as if the guy who ends up
                                        maintaining your code will be a violent psychopath who knows where you live...
                                    </p>
                                    <a href="#" class="btn btn-outline-primary stretched-link"> <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="card  box" style="max-width: 500px;">
                        <div class="row g-0 ">
                            <div class="col-sm-5 ">
                                <img src="../media/landing/—Pngtree—personal blog_2853664.png"
                                    class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-cappitalize">Lorem ipsum ...</h5>
                                    <p class="card-texttext-cappitalize">alwats code as if the guy who ends up
                                        maintaining your code will be a violent psychopath who knows where you live...
                                    </p>
                                    <a href="#" class="btn btn-outline-primary stretched-link"> <i
                                            class="fa fa-arrow-right" aria-hidden="true"></i> read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- ===== End swiper carousel ======= -->
        <!-- ===== Footer ==== -->
        <?php include "includes/footer.php" ?>
        <!-- ===== End Footer ======= -->
    </div>
    <!-- ===== Content ====== -->


    <!-- Bootstrap js -->
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/popper.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- <script src="../assets/dist/js/bootstrap4.js"></script> -->
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS for Owl carousel -->
    <script src="../assets/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/plugins/owl.carousel/owl.custom.js"></script>
    <!-- Transition js -->
    <script src="../assets/plugins/aos/aos.js"></script>
    <script src="../assets/plugins/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/plugins/swiper/swiper-bundle.min.js"></script>

    <!--  Custom js -->
    <script src="../assets/custom/js/custom.js"></script>
    <script src="../assets/custom/js/main.js"></script>
</body>

</html>