<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadena de Restaurantes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="restaurantes">
    <meta name="author" content="Huban Creative">

    @include('layouts.partials.css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="{{ asset('corporate/img/favicon.ico') }}">
</head>
<body class="fixed-left">

@include('layouts.partials.logout-modal')

<!-- Begin page -->
<div id="wrapper">

    @include('layouts.partials.top-bar')

    @include('layouts.partials.menu')

    <!-- Start right content -->
    <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Content here -->
        <!-- ============================================================== -->
        <div class="content">
            <!-- Page Heading Start -->

            @yield('content')

            <!-- Page Heading End-->
            <div class="row">
                <div class="col-md-12 portlets"></div>
            </div>

            <!-- Footer Start -->
            <footer>
                GV &copy; 2017
                <div class="footer-links pull-right">
                    <a href="#">About</a><a href="#">Support</a><a href="#">Terms of Service</a><a href="#">Legal</a><a href="#">Help</a><a href="#">Contact Us</a>
                </div>
            </footer>
            <!-- Footer End -->
        </div>
        <!-- ============================================================== -->
        <!-- End content here -->
        <!-- ============================================================== -->

    </div>
    <!-- End right content -->
</div>
<!-- End of page -->

<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->
@include('layouts.partials.js')
</body>
</html>