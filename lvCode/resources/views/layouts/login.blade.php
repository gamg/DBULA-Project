<!DOCTYPE html>
<html>
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.css')
        @include('layouts.partials.scripts-and-link-tags')
    </head>
<body class="fixed-left login-page">

@include('layouts.partials.logout-modal')

<!-- Begin page -->
<div class="container">
    @yield('content')
</div>

<!-- the overlay modal element -->
<div class="md-overlay"></div>
<!-- End of eoverlay modal -->

@include('layouts.partials.js')

</body>
</html>