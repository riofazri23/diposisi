<!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="<?= BASE_URL ?>">
                    <b class="logo-abbr"><img src="<?= BASE_URL ?>assets/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="<?= BASE_URL ?>assets/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="<?= BASE_URL ?>assets/images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <a href="<?= BASE_URL ?>"></a><i class="fa-xl fa-solid fa-square-caret-down"></i>
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                    <hr class="my-2">
                                        <li><a href="<?= BASE_URL ?>logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
		<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Admin</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-reguler fa-user"></i><span class="nav-text ml-2">Teknisi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASE_URL ?>teknisi/teknisi.php">Data Teknisi</a></li>
                            <li><a href="<?= BASE_URL ?>teknisi/form_teknisi.php">Input Teknisi</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa-solid fa-clipboard-list"></i><span class="nav-text ml-2">Disposisi</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASE_URL ?>disposisi/data_disposisi.php">Data Disposisi</a></li>
                            <li><a href="<?= BASE_URL ?>disposisi/disposisi.php">Input Tiket</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa-brands fa-mailchimp"></i><span class="nav-text ml-2">Greedy</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?= BASE_URL ?>disposisi/greedy.php">Waktu Tercepat</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
