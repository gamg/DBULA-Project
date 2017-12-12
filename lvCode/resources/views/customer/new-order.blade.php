@extends('layouts.layout')

@inject('restaurants', 'App\Services\Restaurants')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-edit'></i> Nuevo pedido</h1>
        <h3>Selecciona tu preferencia para crear el pedido</h3>
    </div>
    <div class="row">
        <div class="col-md-12 portlets">
            <div class="widget animated fadeInDown">
                <form id="myWizard" method="POST" action="{{ route('orders.store') }}">
                    {{ csrf_field() }}
                    <section class="step" data-step-title="Locales">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="box-info animated fadeInDown">
                                    <h2><strong>Selecciona</strong> un local</h2>
                                    <div class="gallery-wrap">
                                        @foreach($restaurants->getAll() as $local)
                                        <div class="column">
                                            <div class="inner">
                                                <div class="img-frame success">
                                                    <div class="img-wrap">
                                                        <img src="{{ asset('corporate/img/local/'.$local->imagen) }}" alt="{{ $local->nombre }}" title="{{ $local->nombre }}" class="mfp-fade">
                                                    </div>
                                                    <div class="caption-hover success">
                                                        {{ $local->nombre }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <div class="radio iradio">
                                                        <label style="padding-left: 0;">
                                                            <input id="local" class="test" type="radio" name="local" value="{{ $local->rif }}">
                                                            {{ $local->direccion }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
                                    @foreach($plates as $plate)
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="{{ asset('corporate/img/small/img007_small.jpg') }}" alt="Plato 1">
                                            <div class="caption">
                                                <h3>{{ $plate->nombre }}</h3>
                                                <p><strong>{{ $plate->precio }} Bs</strong></p>
                                                <p>{{ $plate->descripcion }}</p>
                                                <p>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <input name="plates[]" value="{{$plate->id}}" type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                            </div>
                                                            <div class="col-sm-8">
                                                                <input name="platequantity[{{$plate->id}}]" type="text" class="form-control" placeholder="Cantidad">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Bebidas">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> bebidas para tu pedido (opcional)</h2>
                                <div class="row">
                                    @foreach($drinks as $drink)
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>{{ $drink->nombre }}</h3>
                                                <p><strong>{{ $drink->precio }} BS </strong></p>
                                                <p>Vaso grande</p>
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input name="drinks[]" value="{{ $drink->id }}" type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input name="drinkquantity[{{ $drink->id }}]" type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="step" data-step-title="Extras">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2><strong>Selecciona</strong> extras para tu pedido (opcional)</h2>
                                <div class="row">
                                    @foreach($additionals as $extra)
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <div class="caption">
                                                <h3>{{ $extra->nombre }}</h3>
                                                <p><strong>{{ $extra->precio }} BS </strong></p>
                                                {{--<p>Papas fritas</p>--}}
                                                <p>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input name="additionals[]" value="{{ $extra->id }}" type="checkbox" class="ios-switch ios-switch-success ios-switch-sm" />
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input name="extraquantity[{{$extra->id}}]" type="text" class="form-control" placeholder="Cantidad">
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
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
                                                <input type="radio" name="paymenttype" id="optionsRadios1" value="1">
                                                Pagar en efectivo (cobro a destino)
                                            </label>
                                        </div>
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="paymenttype" id="optionsRadios2" value="2">
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
                                                <input type="radio" name="shippingaddress" id="optionsRadios1" value="1">
                                                Dirección 1
                                            </label>
                                        </div>
                                        <div class="radio iradio">
                                            <label>
                                                <input type="radio" name="shippingaddress" id="optionsRadios2" value="2">
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