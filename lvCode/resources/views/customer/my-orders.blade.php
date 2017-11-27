@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-edit'></i> Mis Pedidos</h1>
        <h3>Gestionar mis pedidos</h3>
    </div>
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
                                    <a class="btn btn-success"><i class="fa fa-plus-circle"></i> Crear nuevo pedido</a>
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
                            <tr>
                                <td>87854</td>
                                <td><span class="label label-warning">En espera</span></td>
                                <td>12/04/2017</td>
                                <td>Transferencia</td>
                                <td>105000</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Ver más" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12365</td>
                                <td><span class="label label-danger">Cancelado</span></td>
                                <td>10/04/2017</td>
                                <td>Transferencia</td>
                                <td>95000</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Ver más" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>32589</td>
                                <td><span class="label label-success">Pagado</span></td>
                                <td>10/03/2017</td>
                                <td>Efectivo</td>
                                <td>100000</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Ver más" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>32589</td>
                                <td><span class="label label-info">Enviado</span></td>
                                <td>09/03/2017</td>
                                <td>Transferencia</td>
                                <td>75000</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Ver más" class="btn btn-info"><i class="fa fa-info-circle"></i></a>
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="data-table-toolbar">
                        <ul class="pagination">
                            <li class="disabled"><a href="#">&laquo;</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection