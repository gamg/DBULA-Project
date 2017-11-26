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
                            <a href='#' class='active'>
                                <i class='icon-edit'></i>
                                <span>Mis pedidos</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='icon-address'></i>
                                <span>Direcciones de envío</span>
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
                            <a href='#' class='active'>
                                <i class='fa fa-building'></i>
                                <span>Locales</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-users'></i>
                                <span>Empleados</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-tags'></i>
                                <span>Cuentas bancarias</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-star'></i><span>Servicios</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href='#' class='active'>
                                <i class='fa fa-bars'></i>
                                <span>Menús</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-cutlery'></i>
                                <span>Platos</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-coffee'></i>
                                <span>Bebidas</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-asterisk'></i>
                                <span>Extras</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class='has_sub'>
                    <a href='javascript:void(0);'>
                        <i class='fa fa-check-square-o'></i><span>Pedido</span>
                        <span class="pull-right"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href='#' class='active'>
                                <i class='fa fa-edit'></i>
                                <span>Pedidos</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-users'></i>
                                <span>Clientes</span>
                            </a>
                        </li>
                        <li>
                            <a href='#'>
                                <i class='fa fa-flag'></i>
                                <span>Tipos de IVA</span>
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