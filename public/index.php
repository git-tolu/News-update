<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News-update</title>
    <link rel="shortcut icon" href="../media/update-logo.png" type="image/x-icon">
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

<body id="home">
    <!-- ===== Navbar ====== -->
    <?php include "includes/header.php" ?>
    <!-- ===== End Navbar ====== -->
    <!-- ===== Content ====== -->
    <div class="container">
        <!-- ===== Hero ====== -->
        <div class="row">
            <div class="col-md-6">
                <h3 data-aos="fade-right" data-aos-delay="200">News-update</h3>
                <h3 data-aos="fade-right" data-aos-delay="400" class="display-3 thick text-cappitalize">Lorem ipsum
                    dolor sit amet.</h3>
                <div class="text-justify" data-aos="fade-right" data-aos-delay="600">
                    <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa magni minus ipsum
                        quibusdam,
                        neque
                        fuga dolore quasi vero sequi, nemo ipsam repellat itaque ea doloribus. Inventore sapiente
                        laboriosam rerum cum!. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit qui at
                        quam error fuga culpa sunt animi optio aliquid iure non porro, nisi nesciunt ipsam quos
                        accusantium ea? Assumenda, impedit? </p>
                </div>
                <div class="d-flex justify-content-between" data-aos="fade-right" data-aos-delay="800">
                    <button type="button" class="btn btn-primary sm-btn" data-toggle="button" aria-pressed="false"
                        autocomplete="off"> <a href="../userDashboard/index" class="text-decoration-none text-white"> <i class="fa fa-bookmark" aria-hidden="true"></i> Post blog</a> </button>
                    <button type="button" class="btn btn-outline-primary sm-btn" data-toggle="button"
                        aria-pressed="false" autocomplete="off"> <i class="fa fa-tag" aria-hidden="true"></i>
                        Register to receive updates </button>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="600">
                <div class=" fiqure">
                    <div id="owl-demo" class="owl-carousel">
                        <div class="item">
                            <img src="../media/landing/hero-img.png" width="100%" height="500px" alt=""
                                class="img-fluid landing">
                        </div>
                        <div class="item">
                            <img src="../media/landing/—Pngtree—personal blog_2853664.png" width="100%" height="500px"
                                alt="" class="img-fluid landing">
                        </div>
                        <div class="item">
                            <img src="../media/landing/undraw_Blogging_re_kl0d.png" width="100%" height="500px" alt=""
                                class="img-fluid landing">
                        </div>
                        <div class="item">
                            <img src="../media/landing/blogging-isometric-icon-with-character-writing-post-3d_1284-63083.webp"
                                width="100%" height="500px" alt="" class="img-fluid landing">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== End Hero ====== -->
        <div class="row mb-3" data-aos="fade-down" data-aos-delay="400">
            <div class="col-md-12">
                <h3 class="text-center rec">Recent updates </h3>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <p class="bor  text-center "></p>
                </div>
            </div>
        </div>
        <!-- ==== Post Carousel ==== -->
        <div class="row mb-5" data-aos="fade-down" data-aos-delay="600">
            <div class="col-md-12">
                <!-- Multiple Slider -->
                <div id="owl-demo2" class="owl-carousel">
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card box">
                            <img class="card-img-top" height="300px"
                                src="../media/landing/concept-blogging_88465-58.webp" alt="">
                            <div class="card-body">
                                <div class="category bg-primary p-2 text-center m-2">Sports</div>
                                <a href="single" class="text-decoration-none card-title text-uppercase blog-title">
                                    <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur.
                                    </h4>
                                </a>
                                <div class="card-text d-flex m-2">
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                        <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                        <small class="view-sm mx-2 ">Views 500</small>
                                    </p>
                                    <p class="sm-btn d-flex">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <small class="date-sm mx-2 "> July 3, 2022</small>
                                    </p>
                                </div>
                                <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                    elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                    quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse
                                    dolores velit qui!</p>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="float-start bg-secondary text-center author p-2">
                                    By Tolu
                                </div>
                                <div class="card-text float-end">
                                    <p class="read">
                                        <a href="single" class="read  text-muted sm-btn">
                                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                            Read more
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==== end Post Carousel ==== -->
        <!-- ==== Post  ==== -->
        <div class="row mb-3" data-aos="fade-up" data-aos-delay="600">
            <div class="col-md-12">
                <h3 class="text-center rec"> Updates </h3>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <p class="bor  text-center "></p>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <!-- ==== Post Cards ==== -->
            <div class="col-md-8" data-aos="fade-right" data-aos-delay="400">
                <div class=" mb-3 d-flex justify-content-between">
                    <div class="dropdown open">
                        <a class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Sort By
                        </a>
                        <div class="dropdown-menu" aria-labelledby="triggerId">
                            <a class="dropdown-item" href="#">all</a>
                            <a class="dropdown-item" href="#">Latest</a>
                            <a class="dropdown-item" href="#">Popular</a>
                        </div>
                    </div>
                    <div class="dropdown open">
                        <a class="btn btn-secondary dropdown-toggle arrowHover justify-content-between" href="#"
                            id="cat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category </a>
                        <div class="dropdown-menu" aria-labelledby="cat">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                            <a class="dropdown-item" href="#">Action 6</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </div>
                </div>
                <div class="new-inner mt-3">
                    <div class="card shadow" data-aos="fade-zoom" data-aos-delay="600">
                        <div class="card-header">
                            <img class="card-img-top" src="../media/landing/concept-blogging_88465-58.webp" alt="">
                        </div>
                        <div class="card-body">
                            <div class="category bg-primary p-2 text-center m-2">Sports</div>
                            <h4 class="card-title text-uppercase blog-title">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Dolor, numquam.</h4>
                            <div class="card-text d-flex m-2">
                                <p class="sm-btn d-flex">
                                    <i class="fa fa-comment" aria-hidden="true"></i>
                                    <small class="text-muted comment-sm  mx-2">Comments 500</small>
                                </p>
                                <p class="sm-btn d-flex">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <small class="view-sm mx-2 ">Views 500</small>
                                </p>
                                <p class="sm-btn d-flex">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <small class="date-sm mx-2 "> July 3, 2022</small>
                                </p>
                            </div>
                            <p class="card-text text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Maxime consectetur itaque facilis distinctio pariatur iure quis, voluptas
                                quibusdam! Nemo, consequatur aperiam? Soluta hic, voluptatum tenetur quidem esse dolores
                                velit qui!</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <div class="bg-secondary text-center author p-2">
                                By Tolu
                            </div>
                            <div class="card-text">
                                <p class="read"> <a href="single" class="read text-muted"><i class="fa fa-arrow-right"
                                            aria-hidden="true"></i>Read more</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination d-flex justify-content-between my-5" data-aos="fade-right" data-aos-delay="600">
                    <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Next <i
                            class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block"> <i
                            class="fa fa-arrow-left" aria-hidden="true"></i> Prev</button>
                </div>
            </div>
            <!-- ==== End Post Cards ==== -->
            <!-- ==== Sidebar ==== -->
            <div class="col-md-4" data-aos="fade-left" data-aos-delay="600">
                <div class="card mb-3" data-aos="fade-zoom" data-aos-delay="800">
                    <div class="p-5 d-flex">
                        <div class="text-uppercase ">
                            <h4> Categories</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="cat-links clearfix ">
                            <li><span class="ttl">Business</span><span class="count">26</span></li>
                            <li><span class="ttl">Consultant</span><span class="count">30</span></li>
                            <li><span class="ttl">Creative</span><span class="count">70</span></li>
                            <li><span class="ttl">UI/UX</span><span class="count">56</span></li>
                            <li><span class="ttl">Technology</span><span class="count">60</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card mb-3" data-aos="fade-zoom" data-aos-delay="800">
                    <div class="p-5 d-flex">
                        <h4>Never Miss News</h4>
                    </div>
                    <div class="social-links p-5 ">
                        <span class="fa p-3 icon fa-facebook-f"></span>
                        <i class="fa  p-3 icon fa-linkedin" aria-hidden="true"></i>
                        <span class="fa p-3 icon fa-twitter"></span>
                        <span class="fa p-3 icon fa-instagram"></span>
                        <span class="fa p-3 icon fa-youtube"></span>
                        <!-- <ul class="d-flex ul">
                            <li><a href="#"><span class="fa p-3 icon fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fa p-3 icon fa-twitter"></span></a></li>
                            <li><a href="#"><i class="fa  p-3 icon fa-linkedin" aria-hidden="true"></i> </a></li>
                            <li><a href="#"><span class="fa p-3 icon fa-instagram"></span></a></li>
                            <li><a href="#"><span class="fa p-3 icon fa-youtube"></span></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="card mb-3" data-aos="fade-zoom" data-aos-delay="800">
                    <div class="p-5 d-flex">
                        <div class="text-uppercase ">
                            <h4> Popular Tags</h4>
                        </div>
                    </div>
                    <div class="card-body ">
                        <span class="tags p-2 text-muted">Business</span>
                        <span class="tags p-2 text-muted">Consultant</span>
                        <span class="tags p-2 text-muted">Creative</span>
                        <span class="tags p-2 text-muted">UI/UX</span>
                        <span class="tags p-2 text-muted">Technology</span>
                    </div>
                </div>
            </div>
            <!-- ==== End Sidebar ==== -->
        </div>
        <!-- ==== end Posts ==== -->
        <!-- ===== swiper carousel ======= -->
        <div id="about" class="row mb-3" data-aos="fade-down" data-aos-delay="400">
            <div class="col-md-12">
                <h3 class="text-center rec">Our Sponsorers</h3>
                <div class="d-flex justify-content-center align-items-center text-center">
                    <p class="bor  text-center "></p>
                </div>
            </div>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="400">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Toluwanimi Adejumobi</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus.
                                Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at
                                semper.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Bode Thomos</h3>
                            <h4>senior Administrator</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>David Goliath</h3>
                            <h4>Senior Frontend Developer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis minim
                                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Ganiu Dudu</h3>
                            <h4>Senoir backend developer</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim velit
                                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Praise Agba</h3>
                            <h4>Board of director</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam enim
                                culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                cillum
                                quid.
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
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
    <script src="../assets/dist/js/bootstrap4.js"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS for Owl carousel -->
    <script src="../assets/plugins/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/plugins/owl.carousel/owl.custom.js"></script>
    <!-- Transition js -->
    <script src="../assets/plugins/aos/aos.js"></script>
    <!-- <script src="../assets/plugins/glightbox/js/glightbox.min.js"></script>  -->
    <script src="../assets/plugins/swiper/swiper-bundle.min.js"></script>

    <!--  Custom js -->
    <script src="../assets/custom/js/custom.js"></script>
    <script src="../assets/custom/js/main.js"></script>
</body>

</html>