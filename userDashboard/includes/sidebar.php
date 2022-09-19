<div class="d-flex flex-column sticky-top  fullnav p-3 bg-white" style="height: 100vh;" id="side_nav">
            <div class="d-flex position-sticky navbar-brand">
                <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                    <svg class="bi me-2" width="40" height="32">
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span class="fs-4">News-update</span>
                </a>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABl0lEQVRoge2ZTU7DQAyFH9yBKJQT0fYKHAAOQNatOBZwAVjRBecgYcMqXcQRNJpGtucnFvKTRhMpdvK+TDLjaACXy6XVFsALgG8A/cKtIy8bKcSTAfPn2p4LsaWEHwCPAFbSp5BBKwANBk89gDUn6ZWCm3y+1GoweHvmBHcUfJ3TkVI1Bm8tJ3h8F60q6O9yASNZ5CDW5CDWlALkHkAVkV/RNZJLMv0+UOwBOpiKcnu6FkdsfxKQKwAfFP8J2SI6za2ZeVlAQoY4MFoIkT/Nyi6BiYEQ+dOWKByYWAiRv5haaw4mBYTIX2zRGIJJBSHyl6L6/TutHibHMWsOUBgEOB2FFCMxykQZf1HyZv5qkUIfdkwFoPaXcvqtZ85pYYoviKEPOwVM0RJlbnaKhSlWNHKm2BiYImW8ZJ3QwmQB+Tc/VkD5X93iJUoumShRsslBrMlBrCkE0lFvYcttqhvqv6YnQiBv1N9ls6PX6OmdE7zB72ZoAxsjM90MveUm7nF+e3jptpM+hTWG3dPWgPmWvLBHwuVyneoI9StbelnG+CQAAAAASUVORK5CYII=" width="20" height="20" class="close-btn  mt-2 ml-5 pl-5" style="cursor: pointer;">
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="dashboard" class="nav-link <?php if($page == "dashboard"){echo "active";}else{echo "link-dark";} ?>" aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home" />
                        </svg>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="profile" class="nav-link <?php if($page == "profile"){echo "active";}else{echo "link-dark";} ?>">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#people-circle" />
                        </svg>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="notification" class="nav-link <?php if($page == "notification"){echo "active";}else{echo "link-dark";} ?>">
                        <img src="../media/svg/message-svgrepo-com.svg" class="me-2" width="15" height="16" alt="">
                        <span> Notification </span>
                    </a>
                </li>
                <?php if($cstatus == 'admin'): ?>
                    <li>
                        <a href="managePost" class="nav-link <?php if($page == "managePost"){echo "active";}else{echo "link-dark";} ?>">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#grid" />
                            </svg>
                            <span>Manage Posts</span>
                        </a>
                    </li>
                    <li>
                        <a href="manageUser" class="nav-link <?php if($page == "manageUser"){echo "active";}else{echo "link-dark";} ?>">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB5UlEQVRIie3VP08VQRQF8N9D/higwcRCpLMQpbRQW7SwV4SK2BgTLYwfQD8BmthooY3/PgEJ0WijiXY2ajTBGCFBGwmRII2CWOzdvMcwb8EIle8kk9mcc+89s7N3Zmmhhf8dNVzAayzjG25i104bT2AtM95gZDsM9uCZ4q3uB3cAq02M1/AT/RH7KHKfRq0NaMtwY3iHE+jGYvBHm8SX6MCpeP4euSfxFqObGXfhFvY1cEsx768wLbE35sUGrh+30VllPIi+hBuI+eMWjKdjThfZh4NVxh2ZYksZrhnWYv6R0bqqjKcVDdSI7lxiE5QL70n4VfXdyGLIxm79EgXb8DCjl+NBxHTia0Yf2mzFHzJJE6EfUhyTVF9W/4a5s/5e/jOuw0gm8Zd6k41n9PHQBiI21U9vZkqxXVNJ4mPFdQnDmcLDodXwJNGmVJ//dbgUSTM4h/bgezOFy4X1Rkx75MyEdnGrpscxh3vq3dmJ8w3FcmMmYsqLokdx3c7hWJXhEUziN+6ob+1ZzFYYpmNW/YdRw92oORke63ANK5H4SXFma7jxF4bpuB41duNzcCu4WpqOJQmXgz/zD6ZpN19J+FF4lZCDEfxiG4yfR63DCf8SFhKybKj5bTCej1q9Cb+ghRZ2Cn8AoIvx7ECbd4kAAAAASUVORK5CYII=" width="20" height="20" class="me-2">
                            <span>Manage Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin" class="nav-link <?php if($page == "admin"){echo "active";}else{echo "link-dark";} ?>">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB5UlEQVRIie3VP08VQRQF8N9D/higwcRCpLMQpbRQW7SwV4SK2BgTLYwfQD8BmthooY3/PgEJ0WijiXY2ajTBGCFBGwmRII2CWOzdvMcwb8EIle8kk9mcc+89s7N3Zmmhhf8dNVzAayzjG25i104bT2AtM95gZDsM9uCZ4q3uB3cAq02M1/AT/RH7KHKfRq0NaMtwY3iHE+jGYvBHm8SX6MCpeP4euSfxFqObGXfhFvY1cEsx768wLbE35sUGrh+30VllPIi+hBuI+eMWjKdjThfZh4NVxh2ZYksZrhnWYv6R0bqqjKcVDdSI7lxiE5QL70n4VfXdyGLIxm79EgXb8DCjl+NBxHTia0Yf2mzFHzJJE6EfUhyTVF9W/4a5s/5e/jOuw0gm8Zd6k41n9PHQBiI21U9vZkqxXVNJ4mPFdQnDmcLDodXwJNGmVJ//dbgUSTM4h/bgezOFy4X1Rkx75MyEdnGrpscxh3vq3dmJ8w3FcmMmYsqLokdx3c7hWJXhEUziN+6ob+1ZzFYYpmNW/YdRw92oORke63ANK5H4SXFma7jxF4bpuB41duNzcCu4WpqOJQmXgz/zD6ZpN19J+FF4lZCDEfxiG4yfR63DCf8SFhKybKj5bTCej1q9Cb+ghRZ2Cn8AoIvx7ECbd4kAAAAASUVORK5CYII=" width="20" height="20" class="me-2">
                            <span>Admin</span>
                        </a>
                    </li>
                <?php else: ?>
                <?php endif; ?>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Username</strong>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                    <li><a class="dropdown-item" href="dashboard">Write Post ...</a></li>
                    <li><a class="dropdown-item" href="notification">Notification</a></li>
                    <li><a class="dropdown-item" href="profile">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="../commands/models/logout.php">Sign out</a></li>
                </ul>
            </div>
        </div>