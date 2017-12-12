<!-- Left Sidebar Start -->
<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="clearfix"></div>
        <!--- Profile -->
        <div class="profile-info" style="margin-top: 5px">
            <div class="col-xs-4">
                <a href="#" class="rounded-image profile-image"><img src="{{  asset('corporate/img/users/user-100.jpg') }}"></a>
            </div>
            <div class="col-xs-8">
                <div class="profile-text">Hola <b>Gustavo</b></div>
                <div class="profile-buttons">
                    <a class="md-trigger" data-modal="logout-modal" title="Sign Out"><i class="fa fa-power-off text-red-1"></i></a>
                </div>
            </div>
        </div>
        <!--- Divider -->
        <div class="clearfix"></div>
        <hr class="divider" />
        <div class="clearfix"></div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-home'></i><span>Home</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href='{{ url('/') }}'>
                                <i class='fa fa-home'></i>
                                <span>Inicio</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-user'></i>
                                <span>Mi perfil</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-bookmark'></i><span>Gestionar</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href='{{route('orders.index')}}' class='active'>
                                <i class='icon-edit'></i>
                                <span>Mis pedidos</span>
                            </a>
                        </li>
                        <li>
                            <a href='{{url('mis-direcciones')}}'>
                                <i class='icon-address'></i>
                                <span>Direcciones de envío</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div><br><br><br>
    </div>
</div>
<!-- Left Sidebar End -->