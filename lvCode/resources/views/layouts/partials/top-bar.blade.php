<!-- Top Bar Start -->
<div class="topbar">
    <div class="topbar-left">
        <div class="logo">
            <h1><a href="#"><img src="{{ asset('corporate/img/logo.png') }}" alt="Logo"></a></h1>
        </div>
        <button class="button-menu-mobile open-left">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-collapse2">
                <ul class="nav navbar-nav navbar-right top-navbar">
                    {{--<li class="dropdown iconify hide-phone">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                            {{--<i class="fa fa-globe"></i>--}}
                            {{--<span class="label label-danger absolute">4</span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu dropdown-message">--}}
                            {{--<li class="dropdown-header notif-header"><i class="icon-bell-2"></i> New Notifications<a class="pull-right" href="#"><i class="fa fa-cog"></i></a></li>--}}
                            {{--<li class="unread">--}}
                                {{--<a href="#">--}}
                                    {{--<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>--}}
                                        {{--<br /><i>2 minutes ago</i>--}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="unread">--}}
                                {{--<a href="#">--}}
                                    {{--<p><strong>John Doe</strong> Created an photo album  <strong>&#34;Fappening&#34;</strong>--}}
                                        {{--<br /><i>8 minutes ago</i>--}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<p><strong>John Malkovich</strong> Added 3 products--}}
                                        {{--<br /><i>3 hours ago</i>--}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<p><strong>Sonata Arctica</strong> Send you a message <strong>&#34;Lorem ipsum dolor...&#34;</strong>--}}
                                        {{--<br /><i>12 hours ago</i>--}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">--}}
                                    {{--<p><strong>Johnny Depp</strong> Updated his avatar--}}
                                        {{--<br /><i>Yesterday</i>--}}
                                    {{--</p>--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li class="dropdown-footer">--}}
                                {{--<div class="btn-group btn-group-justified">--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<a href="#" class="btn btn-sm btn-primary"><i class="icon-ccw-1"></i> Refresh</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<a href="#" class="btn btn-sm btn-danger"><i class="icon-trash-3"></i> Clear All</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="btn-group">--}}
                                        {{--<a href="#" class="btn btn-sm btn-success">See All <i class="icon-right-open-2"></i></a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                    <li class="dropdown iconify hide-phone">
                        <a href="#" onclick="javascript:toggle_fullscreen()">
                            <i class="icon-resize-full-2"></i>
                        </a>
                    </li>
                    <li class="dropdown topbar-profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="rounded-image topbar-profile-image">
                                <img src="{{ asset('corporate/img/users/user-35.jpg') }}">
                            </span> Gustavo <strong>Meza</strong>
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Mi perfil</a></li>
                            <li><a href="#">Mis pedidos</a></li>
                            <li class="divider"></li>
                            <li><a class="md-trigger" data-modal="logout-modal"><i class="icon-logout-1"></i>Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>
<!-- Top Bar End -->