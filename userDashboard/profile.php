<?php
include "../commands/models/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News-update Dashboard</title>
    <link rel="shortcut icon" href="../media/update-logo.png" type="image/x-icon">
    <!-- Bootstrap css -->
    <!-- <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../assets/bootstrap5.2/bootstrap.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="../assets/custom/css/dashboard.css">

    <!-- OWl carousel css -->
    <link href="../assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/owl.carousel/owl.theme.default.css" rel="stylesheet" yype="text/css" />
    <!-- Transition css -->
    <link rel="stylesheet" href="../assets/plugins/aos/aos.css">
    <link href="../assets/plugins/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/plugins/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- font css -->
    <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
</head>

<body class="bg-light">
    <!-- ==== svg ==== -->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>
        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>
        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>
        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z" />
        </symbol>
        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
        </symbol>
        <symbol id="collection" viewBox="0 0 16 16">
            <path
                d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z" />
        </symbol>
        <symbol id="calendar3" viewBox="0 0 16 16">
            <path
                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
            <path
                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </symbol>
        <symbol id="chat-quote-fill" viewBox="0 0 16 16">
            <path
                d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM7.194 6.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 6C4.776 6 4 6.746 4 7.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 9.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 6c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z" />
        </symbol>
        <symbol id="cpu-fill" viewBox="0 0 16 16">
            <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
            <path
                d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </symbol>
        <symbol id="gear-fill" viewBox="0 0 16 16">
            <path
                d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
        </symbol>
        <symbol id="speedometer" viewBox="0 0 16 16">
            <path
                d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd"
                d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z" />
        </symbol>
        <symbol id="toggles2" viewBox="0 0 16 16">
            <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z" />
            <path
                d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z" />
            <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z" />
        </symbol>
        <symbol id="tools" viewBox="0 0 16 16">
            <path
                d="M1 0L0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z" />
        </symbol>
        <symbol id="chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
        </symbol>
        <symbol id="geo-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
        </symbol>
    </svg>
    <!-- ==== end svg ==== -->
    <!-- ==== coontent ==== -->
    <div class="main-container d-flex">
        <!-- ==== sidebar ==== -->
        <!-- ==== full sidebar ==== -->
        <?php $page = "profile";
include "includes/sidebar.php"; ?>
        <!-- ==== end sidebar ==== -->
        <!-- ==== content ==== -->
        <div class="content">
            <!-- ==== navbar ==== -->
            <?php include "includes/nav.php"; ?>
            <!-- ==== end navbar ==== -->
            <!-- ==== content ==== -->
            <div class="container">
                <!-- ==== Title ==== -->
                <div class="d-flex mt-5  justify-content-between">
                    <h3>Profile</h3>
                    <div class="breadcrumb">
                        <p class="breadcrumb-item cursor" href="#">Pages</p>
                        <p class="breadcrumb-item cursor" href="#">Profile</p>
                    </div>
                </div>
                <!-- ==== End Title ==== -->
                <!-- ==== row ==== -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Password</div>
                            </div>
                            <div class="card-body">
                                <div class="text-center chat-image mb-5">
                                    <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                        <label for="profilepic">
                                            <img alt="avatar" src="../media/profile/avatar-1.jpeg" class="brround profileupload">
                                        </label>
                                        <input type="file" hidden name="profilepic" accept="image/*" id="profilepic">
                                    </div>
                                    <div class="main-chat-msg-name">
                                        <a href="profile.html" class="text-decoration-none">
                                            <h5 class="mb-1 text-dark fw-semibold">Lorem Ipsum</h5>
                                        </a>
                                        <p class="text-muted mt-0 mb-0 pt-0 fs-13">Web Developer</p>
                                    </div>
                                </div>
                                <form id="passwordUpdate">
                                    <div class="form-group">
                                        <label class="form-label">Current Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="fa fa-eye zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                <!-- <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i> -->
                                            </a>
                                            <input class="input100 form-control" name="oldPassword" id="oldPassword" type="password"
                                                placeholder="Current Password"><br>
                                            </div>
                                            <span class="text-danger" id="oldPassworderr"></span>
                                        <!-- <input type="password" class="form-control" value="password"> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="fa fa-eye zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" type="password" name="newPassword" id="newPassword" placeholder="New Password"><br>
                                        </div>
                                        <span class="text-danger" id="newPassworderr"></span>
                                        <!-- <input type="password" class="form-control" value="password"> -->
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="fa fa-eye zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="ConfPassword" id="ConfPassword" type="password"
                                                placeholder="Confirm Password"><br>
                                            </div>
                                            <span class="text-danger" id="ConfPassworderr"></span>
                                        <!-- <input type="password" class="form-control" value="password"> -->
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit" id="passwordUpdateBtn">Update</button>
                                    <a href="javascript:void(0)" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                        <div class="card panel-theme">
                            <div class="card-header">
                                <div class="float-start">
                                    <h3 class="card-title">Contact</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body no-padding">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary text-decoration-none "
                                                href="javascript:void(0)">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="my-auto text-decoration-none">support@demo.com</a>
                                    </li>
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary text-decoration-none"
                                                href="javascript:void(0)"><i class="fa fa-globe"></i></a>
                                        </div>
                                        <a href="javascript:void(0)"
                                            class="my-auto text-decoration-none">www.abcd.com</a>
                                    </li>
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary text-decoration-none"
                                                href="javascript:void(0)"><i class="fa fa-phone"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto text-decoration-none">+125 5826
                                            3658</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Profile</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputname">First Name</label>
                                            <input type="text" class="form-control" id="exampleInputname"
                                                placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputname1">Last Name</label>
                                            <input type="text" class="form-control" id="exampleInputname1"
                                                placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputnumber">Contact Number</label>
                                    <input type="number" class="form-control" id="exampleInputnumber"
                                        placeholder="Contact number">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">About Me</label>
                                    <textarea class="form-control" rows="6">My bio.........</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input class="form-control" placeholder="http://splink.com">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Date Of Birth</label>
                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <select class="form-control select2 form-select">
                                                <option value="0">Date</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
                                                <option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
                                                <option value="9">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <select class="form-control select2 form-select">
                                                <option value="0">Mon</option>
                                                <option value="1">Jan</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Mar</option>
                                                <option value="4">Apr</option>
                                                <option value="5">May</option>
                                                <option value="6">June</option>
                                                <option value="7">July</option>
                                                <option value="8">Aug</option>
                                                <option value="9">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <select class="form-control select2 form-select">
                                                <option value="0">Year</option>
                                                <option value="1">2018</option>
                                                <option value="2">2017</option>
                                                <option value="3">2016</option>
                                                <option value="4">2015</option>
                                                <option value="5">2014</option>
                                                <option value="6">2013</option>
                                                <option value="7">2102</option>
                                                <option value="8">2012</option>
                                                <option value="9">2011</option>
                                                <option value="10">2010</option>
                                                <option value="11">2009</option>
                                                <option value="12">2008</option>
                                                <option value="13">2007</option>
                                                <option value="14">2006</option>
                                                <option value="15">2005</option>
                                                <option value="16">2004</option>
                                                <option value="17">2003</option>
                                                <option value="18">2002</option>
                                                <option value="19">2001</option>
                                                <option value="20">1999</option>
                                                <option value="21">1998</option>
                                                <option value="22">1997</option>
                                                <option value="23">1996</option>
                                                <option value="24">1995</option>
                                                <option value="25">1994</option>
                                                <option value="26">1993</option>
                                                <option value="27">1992</option>
                                                <option value="28">1991</option>
                                                <option value="29">1990</option>
                                                <option value="30">1989</option>
                                                <option value="31">1988</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <a href="javascript:void(0)" class="btn btn-primary my-1">Save</a>
                                <a href="javascript:void(0)" class="btn btn-danger my-1">Cancel</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Notifications</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Allow Location
                                                    Map</span>
                                            </label>
                                        </div>
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Show Notfication</span>
                                            </label>
                                        </div>
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Show Email
                                                    Notification</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Privacy and Security</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Make my profile
                                                    Public</span>
                                            </label>
                                        </div>
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Security Alert</span>
                                            </label>
                                        </div>
                                        <div class="form-group mg-b-10">
                                            <label class="custom-switch ps-0">
                                                <input type="checkbox" name="custom-switch-checkbox"
                                                    class="custom-switch-input" checked="">
                                                <span class="custom-switch-indicator me-3"></span>
                                                <span class="custom-switch-description mg-l-10">Always Sign In</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Delete Account</div>
                            </div>
                            <div class="card-body">
                                <p>Its Advisable for you to request your data to be sent to your Email.</p>
                                <label class="custom-control custom-checkbox mb-0">
                                    <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                        value="option1" checked>
                                    <span class="custom-control-label">Yes, Send my data to my Email.</span>
                                </label>
                            </div>
                            <div class="card-footer text-end">
                                <a href="javascript:void(0)" class="btn btn-primary my-1">Deactivate</a>
                                <a href="javascript:void(0)" class="btn btn-danger my-1">Delete Account</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ==== End Row ==== -->
            </div>
            <!-- ===== Footer ==== -->
            <footer id="contact" class="footer ">
                <div class="footer">
                    <div class="container">
                        <div class="row card align-items-center mt-5 pt-3">
                            <div class="col-md-12 col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center social text-center">
                                <ul
                                    class="text-center clear d-flex justify-content-center align-items-center text-center">
                                    <li>
                                        <a class="social-icon" href="https://www.facebook.com/" target="_blank"><i
                                                class="fa footer-icon fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://twitter.com/" target="_blank"><i
                                                class="fa footer-icon fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://www.youtube.com/" target="_blank"><i
                                                class="fa footer-icon fa-youtube"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://www.linkedin.com/" target="_blank"><i
                                                class="fa footer-icon fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a class="social-icon" href="https://myaccount.google.com/" target="_blank"><i
                                                class="fa footer-icon fa-google-plus"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
                                Copyright © 2022 <a href="javascript:void(0)">Update</a>. Designed with by <a
                                    href="javascript:void(0)">MatrixHack</a> All rights reserved.
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
    <!-- Bootstrap js -->
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap5.2/bootstrap.bundle.min.js"></script>

    <!--  Custom js -->
    <script src="../assets/custom/js/dashboard.js"></script>
    <script src="../assets/custom/js/profile.js"></script>
    
    <!-- sweet alert -->
    <script src="../assets/bootstrap/js/sweet.js"></script>
</body>

</html>