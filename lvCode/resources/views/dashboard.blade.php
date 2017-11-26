@extends('layouts.layout')

@section('content')
    @include('layouts.partials.info-box')
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header ">
                    <h2>Bienvenido Gustavo</h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content padding">
                    <div class="alert alert-info fade in nomargin">
                        <h4>Hola Gustavo bienvenido!</h4>
                        <p>A partir de aquí podrás gestionar los pedidos como empleado, o si te apetece podrás realizar
                            los pedidos de tus platos favoritos. </p>
                        <p>Para empezar solo haz clic en una de las siguientes opciones:</p>
                        <p>
                            <button type="button" class="btn btn-blue-3">Gestionar Pedidos</button>
                            <button type="button" class="btn btn-primary">Realizar pedido</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection