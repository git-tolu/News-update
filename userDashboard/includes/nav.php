<nav class="navbar navbar-expand-lg sticky-top topnav border navbar-light  bg-primary">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <button class="navbar-toggler open-btn " type="button">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABKklEQVRoge2WQUoDQRBFS8FxlcSt8TgeIOoxEvWWGoUoWWjUaxj3z8VUYNCuFlyka/E/NLPo/2r4Dd18M0mS/iXgGLgBHoAvX0vgGugysqVhZ8CaWM/ANBMbnchu2CswA0a+LoA333v6eUKt2CjIrQMbYFLYnwyGLjKwUZBHN88qnkv3LDOwkXnr5lHFM3bPZwbWzOyw5I8GDXQQ/asRWwyy8e95ZeBu7yUJ+1v07zV+sUqX7gT4cM88AxsF6ejfa4B3v2BjX1eDYSvgKANbCzMdDC1pBZxmYmthOmAB3NO/KFvgDpj/dSKtWEnap1CNV41XjY+CqMa3Ys1U41XjVeNrbC2ManxLVpL2KVTjVeNV46MgqvGtWDPVeNV41fgaWwujGt+SlSQp1jdNI0CFf6VcVQAAAABJRU5ErkJggg==" width="16" height="16">
                        </button>
                    </div>
                    <a class="navbar-brand text-white text-center" href="#">Dashboard</a>
                    <button class="navbar-toggler d-lg-none justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAARklEQVRIie3SMQ4AIAgDQPD/v1LfVUZ1Kwbj0ptYmiakZlIFwMTS2ZwnCnAE3alsYwtuZQrGdtMvkjqaKUMz/UwzZWimbwQxoz8TrknIkAAAAABJRU5ErkJggg==">
                    </button>
                    <div class="collapse navbar-collapse justify-content-end " id="collapsibleNavId">
                        <div class="d-flex">
                            <div class="dropdown pt-2">
                                <a class="nav-link text-white position-relative" href="#" id="notification" data-bs-toggle="dropdown">
                                    <i class="fa fa-bell-o" aria-hidden="true"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">50+</span>
                                </a>
                                <div class="dropdown-menu menu_end shadow dropdown-menu-sm-start dropdown-menu-md-end " aria-labelledby="notification">
                                    <h6 class="dropdown-header">You have 5 unread messages</h6>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex" href="notification">
                                        <svg class="bi me-2 mt-3" style="cursor: pointer;" width="30" height="30">
                                            <use xlink:href="#people-circle" />
                                        </svg>
                                        <div class="wd-90p">
                                            <div class="d-flex">
                                                <h5 class="mb-1">Peter Theil</h5>
                                                <small class="text-muted ms-auto text-end">
                                                    6:45 am
                                                </small>
                                            </div>
                                            <span>Commented on file Guest list....</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item d-flex" href="notification">
                                        <svg class="bi me-2 mt-3" style="cursor: pointer;" width="30" height="30">
                                            <use xlink:href="#people-circle" />
                                        </svg>
                                        <div class="wd-90p">
                                            <div class="d-flex">
                                                <h5 class="mb-1">Peter Theil</h5>
                                                <small class="text-muted ms-auto text-end">
                                                    6:45 am
                                                </small>
                                            </div>
                                            <span>Commented on file Guest list....</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-center cursor" href="notification">See all messages</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="#" id="triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="bi me-2 mt-3 " style="cursor: pointer;" width="20" height="20">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-start text-small shadow" aria-labelledby="triggerId">
                                    <li>
                                        <a class="dropdown-item" href="profile">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Profile
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="notification">
                                            <span>
                                                <i class="fa fa-envelope-open-o" aria-hidden="true"></i>
                                                Notification
                                            </span>
                                            <span class=" ml-2 bg-primary rounded-pill text-white  pl-2 py-0 px-2">02</span>
                                        </a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="../commands/models/logout.php"> <i class="fa fa-sign-out" aria-hidden="true"></i> Sign out</a></li>
                                </ul>
                            </div>
                            <div class="d-flex pt-2">
                                <a class="nav-link text-white " href="#">
                                    <i class="fa fa-moon-o"></i>
                                    <i class="fa fa-sun-o" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="d-flex">
                                <a class="btn btn-outline-light my-2 my-sm-0" href="../commands/models/logout.php" >Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
