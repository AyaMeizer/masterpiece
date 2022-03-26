<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet"
        media="all">
    <link href="{{ asset('vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" media="all">
</head>



<body class="animsition">

    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="users">
                            <img style="width:100px;" src="https://i.pinimg.com/originals/e7/80/8a/e7808ab39f4cec8e88c181527deda51d.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list"> -->
                            <!-- <a href="users" style='margin:15px 50px 0;'> -->
            <!-- <img src="https://i.pinimg.com/originals/e7/80/8a/e7808ab39f4cec8e88c181527deda51d.png" alt="CoolAdmin" /> -->
            <!-- </a> -->
            <div class="">
                <nav class="navbar-sidebar">
                    <!-- <ul class=""> -->
                    <a style="color: black; margin:5px 0; margin:5px 0; font-weight:bold;" href="#">
                        <i class="fas fa-tachometer-alt"></i>Admin Dashboards
                    </a>
                    <ul class="list-unstyled navbar__unstyled js-unstyled" style="list-style: none;">
                        <a href="{{url('users')}}">
                            <li style="color: black; margin:5px 0;">
                                Users Dashboard
                            </li>
                        </a>
                        <a href="{{url('countries')}}">
                            <li style="color: black; margin:5px 0;">
                                Countries Dashboard
                            </li>
                        </a>
                        <a href="{{url('trips')}}">
                            <li style="color: black; margin:5px 0;">
                                Trips Dashboard
                            </li>
                        </a>
                        <a href="{{url('reservations')}}">
                            <li style="color: black; margin:5px 0;">
                                Reservations Dashboard
                            </li>
                        </a>
                        <a href="{{url('inquiries')}}">
                            <li style="color: black; margin:5px 0;">
                                Inquiries Dashboard
                            </li>
                        </a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <a href="users" style='margin:15px 50px 0;'>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYTIMRwa2UIDRTVgNTRE2W40aqnDHCo3B-566c7PnIfYZ_CRei" alt="CoolAdmin" />
            </a>
            <div class="">
                <nav class="navbar-sidebar">
                    <!-- <ul class=""> -->
                    <a style="color: black; margin:5px 0; margin:5px 0; font-weight:bold;" href="#">
                        <i class="fas fa-tachometer-alt"></i>Admin Dashboards
                    </a>
                    <ul class="list-unstyled navbar__unstyled js-unstyled" style="list-style: none;">
                        <a href="{{url('users')}}">
                            <li style="color: black; margin:5px 0;">
                                Users Dashboard
                            </li>
                        </a>
                        <a href="{{url('countries')}}">
                            <li style="color: black; margin:5px 0;">
                                Countries Dashboard
                            </li>
                        </a>
                        <a href="{{url('trips')}}">
                            <li style="color: black; margin:5px 0;">
                                Trips Dashboard
                            </li>
                        </a>
                        <a href="{{url('reservations')}}">
                            <li style="color: black; margin:5px 0;">
                                Reservations Dashboard
                            </li>
                        </a>
                        <a href="{{url('inquiries')}}">
                            <li style="color: black; margin:5px 0;">
                                Inquiries Dashboard
                            </li>
                        </a>
                        <!-- <a href="./orders/index.php">
                            <li style="color: black; margin:5px 0;">
                                Orders Dashboard
                            </li>
                        </a> -->
                    </ul>
                   
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR -->
        <!-- PAGE CONTAINER-->
        <div class="page-container">


            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    @yield('content')
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

   <!-- Jquery JS-->
   <script src="{{ asset('vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
<!-- end document-->