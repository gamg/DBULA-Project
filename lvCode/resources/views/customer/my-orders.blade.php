@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-edit'></i> Mis Pedidos</h1>
        <h3>Gestionar mis pedidos</h3>
    </div>
    @include('partials.message')
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Mis Pedidos</strong></h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="data-table-toolbar">
                        <div class="row">
                            {{--<div class="col-md-4">--}}
                                {{--<form role="form">--}}
                                    {{--<input type="text" class="form-control" placeholder="Buscar...">--}}
                                {{--</form>--}}
                            {{--</div>--}}
                            <div class="col-md-12">
                                <div class="toolbar-btn-action" style="text-align: left">
                                    <a class="btn btn-success" href="{{ route('orders.create') }}"><i class="fa fa-plus-circle"></i> Crear nuevo pedido</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table data-sortable class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Código</th>
                                <th>Estado</th>
                                <th>Fecha</th>
                                <th>Tipo de pago</th>
                                <th>Total (Bs)</th>
                                <th data-sortable="false">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->codigo }}</td>
                                    <td><span class="label label-{{ $order->getStatusColor() }}">{{ $order->estado }}</span></td>
                                    <td>{{  $order->fecha }}</td>
                                    <td>{{ $order->ivaType->tipo }}</td>
                                    <td>{{ $order->total }}</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a href="{{route('orders.show', $order->codigo)}}" data-toggle="tooltip" title="Ver más" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
                                            <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            {{--<a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>--}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{--<div class="data-table-toolbar">--}}
                        {{--<ul class="pagination">--}}
                            {{--<li class="disabled"><a href="#">&laquo;</a></li>--}}
                            {{--<li class="active"><a href="#">1</a></li>--}}
                            {{--<li><a href="#">2</a></li>--}}
                            {{--<li><a href="#">3</a></li>--}}
                            {{--<li><a href="#">4</a></li>--}}
                            {{--<li><a href="#">5</a></li>--}}
                            {{--<li><a href="#">&raquo;</a></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection