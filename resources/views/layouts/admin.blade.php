<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Label - Premium Responsive Bootstrap 4 Admin & Dashboard Template</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->

    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="header-fixed">
<!-- partial:partials/_header.html -->
<nav class="t-header">
    <div class="t-header-brand-wrapper">
        <a href="index.html">
            <img class="logo" src="{{asset('images/logo.svg')}}" alt="">
            <img class="logo-mini" src="{{asset('images/logo_mini.svg')}}" alt="">
        </a>
    </div>
    <div class="t-header-content-wrapper">
        <div class="t-header-content">
            <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                <i class="mdi mdi-menu"></i>
            </button>
            <form action="#" class="t-header-search-box">
                <div class="input-group">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search" autocomplete="off">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                </div>
            </form>
            <ul class="nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline mdi-1x"></i>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="notificationDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Notifications</h6>
                            <p class="dropdown-title-text">You have 4 unread notification</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                    <i class="mdi mdi-alert"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Storage Full</small>
                                    <small class="content-text">Server storage almost full</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                    <i class="mdi mdi-cloud-upload"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Upload Completed</small>
                                    <small class="content-text">3 Files uploded successfully</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Authentication Required</small>
                                    <small class="content-text">Please verify your password to continue using cloud services</small>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-message-outline mdi-1x"></i>
                        <span class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="messageDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Messages</h6>
                            <p class="dropdown-title-text">You have 4 unread messages</p>
                        </div>
                        <div class="dropdown-body">
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="{{asset('images/profile/male/image_1.png')}}" alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Clifford Gordon</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="{{asset('images/profile/male/image_2.png')}}" alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-success"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Rachel Doyle</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                            <div class="dropdown-list">
                                <div class="image-wrapper">
                                    <img class="profile-img" src="../assets/images/profile/male/image_3.png" alt="profile image">
                                    <div class="status-indicator rounded-indicator bg-warning"></div>
                                </div>
                                <div class="content-wrapper">
                                    <small class="name">Lewis Guzman</small>
                                    <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-apps mdi-1x"></i>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                        <div class="dropdown-header">
                            <h6 class="dropdown-title">Apps</h6>
                            <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                        </div>
                        <div class="dropdown-body border-top pt-0">
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                                <span class="grid-tittle">Jira</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                                <span class="grid-tittle">Trello</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                                <span class="grid-tittle">Artstation</span>
                            </a>
                            <a class="dropdown-grid">
                                <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                                <span class="grid-tittle">Bitbucket</span>
                            </a>
                        </div>
                        <div class="dropdown-footer">
                            <a href="#">View All</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- partial -->
<div class="page-body">
    <!-- partial:partials/_sidebar.html -->
    <div class="sidebar">
        <div class="user-profile">
            <div class="display-avatar animated-avatar">
                <img class="profile-img img-lg rounded-circle" src="{{asset('images/profile/male/image_1.png')}}" alt="profile image">
            </div>
            <div class="info-wrapper">
                <p class="user-name">Allen Clerk</p>
                <h6 class="display-income">$3,400,00</h6>
            </div>
        </div>
        <ul class="navigation-menu">
            <li class="nav-category-divider">MAIN</li>
            <li>
                <a href="index.html">
                    <span class="link-title">Dashboard</span>
                    <i class="mdi mdi-gauge link-icon"></i>
                </a>
            </li>
            <li>
                <a href="{{route('admin.sessions.index')}}">
                    <span class="link-title">Sessions</span>
                    <i class="mdi mdi-gauge link-icon"></i>
                </a>
            </li>
            <li>
                <a href="#add-pages" data-toggle="collapse" aria-expanded="false">
                    <span class="link-title">Добавления</span>
                    <i class="mdi mdi-codepen link-icon"></i>
                </a>
                <ul class="collapse navigation-submenu" id="add-pages">
                    <li>
                        <a href="{{route('admin.games.index')}}" >Игры</a>
                    </li>
                    <li>
                        <a href="{{route('admin.bookmethods.index')}}" >Способ бронирования</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.typegames.index')}}" >Тип игры</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.paymentmethods.index')}}" >Способ оплаты</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#sample-pages" data-toggle="collapse" aria-expanded="false">
                    <span class="link-title">Sample Pages</span>
                    <i class="mdi mdi-flask link-icon"></i>
                </a>
                <ul class="collapse navigation-submenu" id="sample-pages">
                    <li>
                        <a href="pages/sample-pages/login_1.html" target="_blank">Login</a>
                    </li>
                    <li>
                        <a href="pages/sample-pages/error_2.html" target="_blank">Error</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false">
                    <span class="link-title">UI Elements</span>
                    <i class="mdi mdi-bullseye link-icon"></i>
                </a>
                <ul class="collapse navigation-submenu" id="ui-elements">
                    <li>
                        <a href="pages/ui-components/buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="pages/ui-components/tables.html">Tables</a>
                    </li>
                    <li>
                        <a href="pages/ui-components/typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="pages/forms/form-elements.html">
                    <span class="link-title">Forms</span>
                    <i class="mdi mdi-clipboard-outline link-icon"></i>
                </a>
            </li>
            <li>
                <a href="pages/charts/chartjs.html">
                    <span class="link-title">Charts</span>
                    <i class="mdi mdi-chart-donut link-icon"></i>
                </a>
            </li>
            <li>
                <a href="pages/icons/material-icons.html">
                    <span class="link-title">Icons</span>
                    <i class="mdi mdi-flower-tulip-outline link-icon"></i>
                </a>
            </li>
            <li class="nav-category-divider">DOCS</li>
            <li>
                <a href="../docs/docs.html">
                    <span class="link-title">Documentation</span>
                    <i class="mdi mdi-asterisk link-icon"></i>
                </a>
            </li>
        </ul>
        <div class="sidebar-upgrade-banner">
            <p class="text-gray">Upgrade to <b class="text-primary">PRO</b> for more exciting features</p>
            <a class="btn upgrade-btn" target="_blank" href="http://www.uxcandy.co/product/label-pro-admin-template/">Upgrade to PRO</a>
        </div>
    </div>
    <!-- partial -->
    <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
            <div class="content-viewport">
                <div class="row">
                    <div class="col-12 py-5">
                        <h4>Dashboard</h4>
                        <p class="text-gray">Welcome aboard, Allen Clerk</p>
                    </div>
                </div>

                    @yield('content')



            </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="row">
                <div class="col-sm-6 text-center text-sm-right order-sm-1">
                    <ul class="text-gray">
                        <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                    <small class="text-muted d-block">Copyright © 2019 <a href="http://www.uxcandy.co" target="_blank">UXCANDY</a>. All rights reserved</small>
                    <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i></small>
                </div>
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- page content ends -->
</div>
<!--page body ends -->
<!-- SCRIPT LOADING START FORM HERE /////////////-->
<!-- plugins:js -->
{{--<script src="../assets/vendors/js/core.js"></script>--}}
{{--<!-- endinject -->--}}
{{--<!-- Vendor Js For This Page Ends-->--}}
{{--<script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>--}}
{{--<script src="../assets/vendors/chartjs/Chart.min.js"></script>--}}
{{--<script src="../assets/js/charts/chartjs.addon.js"></script>--}}
{{--<!-- Vendor Js For This Page Ends-->--}}
{{--<!-- build:js -->--}}
{{--<script src="../assets/js/template.js"></script>--}}
{{--<script src="../assets/js/dashboard.js"></script>--}}
<script src="{{asset('js/all.js')}}"></script>
<!-- endbuild -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
