<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page not found </title>
</head>

<body>
    <h1> this page you looking have been moved </h1>
</body>

</html>

<!-- ==== coontent ==== -->
<div class="main-container d-flex">
    <!-- ==== sidebar ==== -->
    <div class="sidebar bg-primary position-sticky" style="width: 300px; height: 100vh;" id="side_nav">
        <div class="container-fluid position-sticky">
            <div class="header-box p-2 d-flex justify-content-between">
                <h1 class="fs-4 d-flex"><span class="bg-white text-dark rounded shadow px-2 me-2"> <i class="fa fa-dashcube" aria-hidden="true"></i> </span>
                </h1>
                <button class="btn d-sm-block d-block close-btn px-1 py-0 text-white"> <i class="fa fa-times" aria-hidden="true"></i> </button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="#" class="nav-link text-white active"> <i class="fa fa-home" aria-hidden="true"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link  text-white"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link text-white d-flex jusify-content-between">
                        <span> <i class="fa fa-envelope-open-o" aria-hidden="true"></i> Messages </span>
                        <span class=" ml-2 bg-white rounded-pill text-primary  pl-2 py-0 px-2">02</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link  text-white"> <i class="fa fa-bookmark" aria-hidden="true"></i>
                        Manage Posts
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link  text-white"> <i class="fa fa-users" aria-hidden="true"></i>
                        Manage Users
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- ==== end sidebar ==== -->
    <!-- ==== content ==== -->
    <div class="content" style="height: 5000px;">
        <!-- ==== navbar ==== -->
        <nav class="navbar navbar-expand-lg sticky-top border navbar-light  bg-primary">
            <div class="container-fluid">
                <div class="d-flex justify-content-between">
                    <button class="navbar-toggler open-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
                        <i class="fa fa-tasks" aria-hidden="true"></i>
                    </button>
                </div>
                <a class="navbar-brand text-white text-center" href="#">Dashboard</a>
                <button class="navbar-toggler d-lg-none justify-content-end" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
                    <div class="d-flex">
                        <div class="dropdown pt-2">
                            <a class="nav-link position-relative text-white" href="#" id="comments" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-comments" aria-hidden="true"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">50+</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="comments">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </div>
                        <div class="dropdown pt-2">
                            <a class="nav-link text-white position-relative" href="#" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell-o" aria-hidden="true"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">50+</span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </div>
                        <div class="d-flex pt-2">
                            <a class="nav-link text-white " href="#">
                                <i class="fa fa-moon-o"></i>
                                <i class="fa fa-sun-o" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ==== end navbar ==== -->
        <!-- ==== content ==== -->
        <div class="container">
            <!-- ==== Title ==== -->
            <div class="d-flex mt-5  justify-content-between">
                <h3>Write Blog</h3>
                <div class="breadcrumb">
                    <p class="breadcrumb-item cursor" href="#">Form</p>
                    <p class="breadcrumb-item cursor" href="#">Post Table</p>
                </div>
            </div>
            <!-- ==== End Title ==== -->
            <!-- ==== row ==== -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3 class="card-title">Blogs</h3>
                            <div class="">
                                <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addModal">Write Blog</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                    <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">First name</th>
                                            <th class="wd-15p border-bottom-0">Last name</th>
                                            <th class="wd-20p border-bottom-0">Position</th>
                                            <th class="wd-15p border-bottom-0">Start date</th>
                                            <th class="wd-10p border-bottom-0">Salary</th>
                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                            <th class="wd-25p border-bottom-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Bella</td>
                                            <td>Chloe</td>
                                            <td>System Developer</td>
                                            <td>2018/03/12</td>
                                            <td>$654,765</td>
                                            <td>b.Chloe@datatables.net</td>
                                            <td>
                                                <!-- Edit modal btn -->
                                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                <!-- Delete  btn -->
                                                <button type="button" name="" id="" class="btn btn-danger btn-lg btn-block">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Donna</td>
                                            <td>Bond</td>
                                            <td>Account Manager</td>
                                            <td>2012/02/21</td>
                                            <td>$543,654</td>
                                            <td>d.bond@datatables.net</td>
                                            <td>
                                                <!-- Edit modal btn -->
                                                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                <!-- Delete  btn -->
                                                <button type="button" name="" id="" class="btn btn-danger btn-lg btn-block">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== End Row ==== -->
        </div>
        <!-- ===== Modal ==== -->
        <!-- Add Post  Modal -->
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">lg</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Add Post  Modal -->
        <!-- Edit Modal -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">lg</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Body
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Edit Modal -->
        <!-- ===== End modal ==== -->
        <!-- ===== Footer ==== -->
        <footer id="contact" class="footer ">
            <div class="footer">
                <div class="container">
                    <div class="row card align-items-center mt-5 pt-3">
                        <div class="col-md-12 col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center social text-center">
                            <ul class="text-center clear d-flex justify-content-center align-items-center text-center">
                                <li>
                                    <a class="social-icon" href="https://www.facebook.com/" target="_blank"><i class="fa footer-icon fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://twitter.com/" target="_blank"><i class="fa footer-icon fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://www.youtube.com/" target="_blank"><i class="fa footer-icon fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://www.linkedin.com/" target="_blank"><i class="fa footer-icon fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href="https://myaccount.google.com/" target="_blank"><i class="fa footer-icon fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                            Copyright © 2022 <a href="javascript:void(0)">Update</a>. Designed with by <a href="javascript:void(0)">MatrixHack</a> All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ===== End Footer ======= -->
        <!-- ==== end content ==== -->
    </div>
    <!-- ==== end content ==== -->
</div>
<!-- ==== end coontent ==== -->
<!-- ==== Navbar ==== -->
<nav class="navbar navbar-expand-lg border navbar-light sticky-top  bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
            <span class="navbar-toggler-icon"></span>
        </button>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavId">
            <div class="d-flex">
                <div class="dropdown">
                    <a class="nav-link position-relative text-white" href="#" id="comments" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">50+</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="comments">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a class="nav-link text-white position-relative" href="#" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">50+</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="notification">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </div>
                <a class="nav-link text-white " href="#">
                    <i class="fa fa-moon-o"></i>
                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                </a>
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Logout</button>
            </div>
        </div>
    </div>
</nav>
<!-- ==== End Navbar ==== -->
<div class="container-fluid">
    <!-- ==== Content ==== -->
    <div class="row">
        <!-- ==== Sidebar ==== -->
        <!-- <nav class="col-md-2 sidebar border nav navbar-expand-lg bg-primary" aria-label="Dark offcanvas navbar">
            <div class="container-fluid position-sticky">
                <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="flex-column">
                            <a class="nav-item  nav-link text-white text-uppercase">
                                main
                            </a>
                            <a href="#" class="nav-item nav-link text-white active"> <i class="fa fa-home" aria-hidden="true"></i>
                                Dashboard</a>
                            <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                Profile</a>
                            <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-bell-o" aria-hidden="true"></i>
                                Messages</a>
                            <div class="nav-item nav-link text-white text-uppercase">
                                admin control panel
                            </div>
                            <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-bookmark" aria-hidden="true"></i>
                                Manage Posts</a>
                            <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-users" aria-hidden="true"></i>
                                Manage Users</a>
                            <button class="nav-item mt-2 btn btn-outline-light btn-lg btn-block px-5" type="submit">Logout</button>
                        </div>

                    </div>
                </div>
            </div>
        </nav> -->

        <nav id="sidebarMenu" class="col-md-2 position-sticky border nav sidebar d-md-block bg-primary collapse flex-column">
            <div class="position-sticky p-2">
                <div class="nav-item  nav-link text-white text-uppercase">
                    main
                </div>
                <a href="#" class="nav-item nav-link text-white active"> <i class="fa fa-home" aria-hidden="true"></i>
                    Dashboard</a>
                <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    Profile</a>
                <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-bell-o" aria-hidden="true"></i>
                    Messages</a>
                <div class="nav-item nav-link text-white text-uppercase">
                    admin control panel
                </div>
                <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-bookmark" aria-hidden="true"></i>
                    Manage Posts</a>
                <a href="#" class="nav-item nav-link text-white"> <i class="fa fa-users" aria-hidden="true"></i>
                    Manage Users</a>
                <button class="nav-item mt-2 btn btn-outline-light btn-lg btn-block px-5" type="submit">Logout</button>
            </div>
        </nav>
        <!-- ==== End Sidebar ==== -->
        <div class="col-md-10" style="height: 5000px;">
            <div class="container">
                <!-- ==== Title ==== -->
                <div class="d-flex mt-5  justify-content-between">
                    <h3>Write Blog</h3>
                    <div class="breadcrumb">
                        <p class="breadcrumb-item cursor" href="#">Form</p>
                        <p class="breadcrumb-item cursor" href="#">Post Table</p>
                    </div>
                </div>
                <!-- ==== End Title ==== -->
                <!-- ==== row ==== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h3 class="card-title">Blogs</h3>
                                <div class="">
                                    <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#addModal">Write Blog</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
                                        <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">First name</th>
                                                <th class="wd-15p border-bottom-0">Last name</th>
                                                <th class="wd-20p border-bottom-0">Position</th>
                                                <th class="wd-15p border-bottom-0">Start date</th>
                                                <th class="wd-10p border-bottom-0">Salary</th>
                                                <th class="wd-25p border-bottom-0">E-mail</th>
                                                <th class="wd-25p border-bottom-0">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bella</td>
                                                <td>Chloe</td>
                                                <td>System Developer</td>
                                                <td>2018/03/12</td>
                                                <td>$654,765</td>
                                                <td>b.Chloe@datatables.net</td>
                                                <td>
                                                    <!-- Edit modal btn -->
                                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </button>
                                                    <!-- Delete  btn -->
                                                    <button type="button" name="" id="" class="btn btn-danger btn-lg btn-block">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Donna</td>
                                                <td>Bond</td>
                                                <td>Account Manager</td>
                                                <td>2012/02/21</td>
                                                <td>$543,654</td>
                                                <td>d.bond@datatables.net</td>
                                                <td>
                                                    <!-- Edit modal btn -->
                                                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editModal">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </button>
                                                    <!-- Delete  btn -->
                                                    <button type="button" name="" id="" class="btn btn-danger btn-lg btn-block">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==== End Row ==== -->
            </div>
            <!-- ===== Modal ==== -->
            <!-- Add Post  Modal -->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">lg</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Body
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end Add Post  Modal -->
            <!-- Edit Modal -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">lg</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Body
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Edit Modal -->
            <!-- ===== End modal ==== -->
            <!-- ===== Footer ==== -->
            <footer id="contact" class="footer ">
                <div class="footer">
                    <div class="container">
                        <div class="row card align-items-center mt-5 pt-3">
                            <div class="col-md-12 col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center social text-center">
                                <ul class="text-center clear d-flex justify-content-center align-items-center text-center">
                                    <li>
                                        <a class="social-icon" href="https://www.facebook.com/" target="_blank"><i class="fa footer-icon fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://twitter.com/" target="_blank"><i class="fa footer-icon fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://www.youtube.com/" target="_blank"><i class="fa footer-icon fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://www.linkedin.com/" target="_blank"><i class="fa footer-icon fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://myaccount.google.com/" target="_blank"><i class="fa footer-icon fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                                Copyright © 2022 <a href="javascript:void(0)">Update</a>. Designed with by <a href="javascript:void(0)">MatrixHack</a> All rights reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- ===== End Footer ======= -->
        </div>
    </div>
    <!-- ==== End Content ==== -->
</div>