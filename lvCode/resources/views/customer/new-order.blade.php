@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-edit'></i> Nuevo pedido</h1>
        <h3>Selecciona tu preferencia para crear el pedido</h3>
    </div>
    <div class="row">
        <div class="col-md-12 portlets">
            <div class="widget animated fadeInDown">
                <form id="myWizard">
                    <section class="step" data-step-title="Locales">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box-info animated fadeInDown">
                                    <h2><strong>Selecciona</strong> un local</h2>
                                    <div class="gallery-wrap">
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/small/img006_small.jpg') }}" alt="Image gallery" title="Image title here" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover">
                                                        Super Pizza
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input type="radio" name="optionsRadios"  value="option2">
                                                            Pellentesque vel imperdiet risus. Nullam cursus lacus odio, at pellentesque orci mollis sit amet.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame success">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Image gallery" title="Image title here" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover success">
                                                        Super Ejecutivo
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input type="radio" name="optionsRadios"  value="option2">
                                                            Pellentesque vel imperdiet risus. Nullam cursus lacus odio, at pellentesque orci mollis sit amet.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame warning">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/small/img008_small.jpg') }}" alt="Image gallery" title="Image title here" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover warning">
                                                        Super comida rápida
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input type="radio" name="optionsRadios"  value="option2">
                                                            Pellentesque vel imperdiet risus. Nullam cursus lacus odio, at pellentesque orci mollis sit amet.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame danger">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/small/img009_small.jpg') }}" alt="Image gallery" title="Image title here" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover danger">
                                                        Super Mexico
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input type="radio" name="optionsRadios"  value="option2">
                                                            Pellentesque vel imperdiet risus. Nullam cursus lacus odio, at pellentesque orci mollis sit amet.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame info">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Image gallery" title="Image title here" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover info">
                                                        Super Vegano
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input type="radio" name="optionsRadios"  value="option2">
                                                            Pellentesque vel imperdiet risus. Nullam cursus lacus odio, at pellentesque orci mollis sit amet.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Platos">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> tus platos</h2>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Pollo a la Plancha</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Arroz, pechuga de pollo a la plancha con bechamel y ensalada cruda</p>
                                                <p>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Pasticho</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam.</p>
                                                <p>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Pasta con albondigas</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam.</p>
                                                <p>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Cachapa</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam.</p>
                                                <p>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Pollo al horno</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam.</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Merlusa</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam.</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Bisteck</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam, hendrerit.</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>Pabellón</h3>
                                                <p><strong>35000Bs</strong></p>
                                                <p>Nam maximus pharetra nisi non dapibus. Quisque massa quam, hendrerit.</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Bebidas">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> bebidas para tu pedido (opcional)</h2>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Coca-Cola</h3>
                                                <p><strong>20000BS </strong></p>
                                                <p>Botella</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Frescolita</h3>
                                                <p><strong>20000BS </strong></p>
                                                <p>Botella</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Nestea</h3>
                                                <p><strong>20000BS </strong></p>
                                                <p>Vaso</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Jugo de parchita</h3>
                                                <p><strong>25000Bs </strong></p>
                                                <p>Vaso</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Extras">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> extras para tu pedido (opcional)</h2>
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Servicio de papas</h3>
                                                <p><strong>15000BS </strong></p>
                                                <p>Papas fritas</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Postre chocolate</h3>
                                                <p><strong>20000BS </strong></p>
                                                <p>Torta rellena de chocolate</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Ensalada Cesar</h3>
                                                <p><strong>40000BS </strong></p>
                                                <p>Ensalada cesar sin pollo</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>Cesar con pollo</h3>
                                                <p><strong>35000Bs </strong></p>
                                                <p>Ensalada Cesar con pollo</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Pago">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> tipo de pago</h2>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                Pagar en efectivo (cobro a destino)
                                            </label>
                                        </div>
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                Pagar con transferencia bancaria
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Envío">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> dirección de envío</h2>
                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                                Dirección 1
                                            </label>
                                        </div>
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                                Dirección 2
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('corporate/libs/jquery-wizard/jquery.easyWizard.js') }}"></script>
    <script src="{{ asset('corporate/js/pages/form-wizard.js') }}"></script>
@endsection