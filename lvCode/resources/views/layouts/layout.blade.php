<!DOCTYPE html>
<html>
<head>
    @include('layouts.partials.meta')
    @include('layouts.partials.css')
    @include('layouts.partials.scripts-and-link-tags')
</head>
<body class="fixed-left">

@include('layouts.partials.logout-modal')

<!-- Begin page -->
<div id="wrapper">

    @include('layouts.partials.top-bar')

        @include('layouts.partials.menu')
        {{--@include('layouts.partials.customer-menu')--}}


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