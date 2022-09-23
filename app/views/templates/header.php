<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $data['title'] ?></title>
    
    <!-- Styles -->
    <link href="<?php echo BASEURL ?>/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/themify-icons.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo BASEURL ?>/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/lib/helper.css" rel="stylesheet">
    <link href="<?php echo BASEURL ?>/css/style.css" rel="stylesheet">    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap4.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                        <!-- <img src="assets/images/logo.png" alt="" /> --><span>Aplikasi Laundry</span></a></div>
                        <li class="label">Menu Utama</li>
                        <li>
                            <!-- <a href="index.php" class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a> -->
                            <a href="<?php echo BASEURL ?>"><i class="ti-home"></i>Dashboard</a>
                        </li>

                        <li class="label">Apps</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Data <span
                            class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                                <li><a href="<?php echo BASEURL ?>/karyawan">Karyawan</a></li>
                                
                                <li><a href="<?php echo BASEURL ?>/pelanggan">Customer</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="<?php echo BASEURL ?>/transaksi"><i class="ti-view-list-alt"></i> Transaksi </a></li>
                        <li><a href="<?php echo BASEURL ?>/paketlaundry"><i class="ti-email"></i> Paket Laundry</a></li>
                        <li><a href="<?php echo BASEURL ?>/pembayaran"><i class="ti-target"></i> Tipe Pembayaran</a></li>
                        <li><a href="laporan.php"><i class="ti-book"></i> Laporan</a></li>
                        
                        <li><a href="<?php echo BASEURL ?>/logout"><i class="ti-close"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->

        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="float-left">
                            <div class="hamburger sidebar-toggle">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </div>
                        </div>
                        <div class="float-right">
                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <div class="drop-down dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-content-heading">
                                            <span class="text-left">Recent Notifications</span>
                                        </div>
                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">5 members joined today </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mariam</div>
                                                            <div class="notification-text">likes a photo of you</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Tasnim</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                        <div class="notification-content">
                                                            <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                            <div class="notification-heading">Mr. John</div>
                                                            <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="text-center">
                                                    <a href="#" class="more-link">See All</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown dib">
                                <div class="header-icon" data-toggle="dropdown">
                                    <span class="user-avatar">Admin
                                        <i class="ti-angle-down f-s-10"></i>
                                    </span>
                                    <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">

                                        <div class="dropdown-content-body">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="ti-user"></i>
                                                        <span>Profile</span>
                                                    </a>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
