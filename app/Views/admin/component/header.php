<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard Dark Edition by Creative Tim</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?= material_dashboard() ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?= demo() ?>" rel="stylesheet" />
    <link href="<?= admin_css() ?>" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="black">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    BrainTech
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./user.html">
                            <i class="material-icons">person</i>
                            <p>Tài khoản</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $GLOBALS['domainPage'] ?>/admin_courses">
                            <i class="material-icons">content_paste</i>
                            <p>Khóa học</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $GLOBALS['domainPage'] ?>/admin_comments">
                            <i class="material-icons">library_books</i>
                            <p>Bình luận</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./icons.html">
                            <i class="material-icons">bubble_chart</i>
                            <p>Icons</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./map.html">
                            <i class="material-icons">location_ons</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./notifications.html">
                            <i class="material-icons">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search..." />
                                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">Stats</p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">Some Actions</p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your
                                        email</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">Account</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->