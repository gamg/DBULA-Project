@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-users'></i> Clientes</h1>
        <h3>Gestionar clientes</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Clientes</strong></h2>
                    <div class="additional-btn">
                        <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                    </div>
                </div>
                <div class="widget-content">
                    <div class="data-table-toolbar">
                        <div class="row">
                            {{--<div class="col-md-4">--}}
                            {{--<form role="form">--}}
                            {{--<input type="text" class="form-control" placeholder="Search...">--}}
                            {{--</form>--}}
                            {{--</div>--}}
                            <div class="col-md-12">
                                <div class="toolbar-btn-action" style="text-align: left">
                                    <a class="btn btn-success"><i class="fa fa-plus-circle"></i> Agregar nuevo</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table data-sortable class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Cédula</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Dirección</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th data-sortable="false">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>V-18244429</td>
                                <td>Gustavo</td>
                                <td>Meza</td>
                                <td>Yogyakarta, Indonesia</td>
                                <td>name@domain.com</td>
                                <td>04247859658</td>
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>V-14789429</td>
                                <td>Jose</td>
                                <td>Perez</td>
                                <td>Yogyakarta, Indonesia</td>
                                <td>name@domain.com</td>
                                <td>0412879654</td>
                                {{--<td><span class="label label-success">Active</span></td>--}}
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>V-21489429</td>
                                <td>Maria</td>
                                <td>Perez</td>
                                <td>Yogyakarta, Indonesia</td>
                                <td>name@domain.com</td>
                                <td>0426987469</td>
                                {{--<td><span class="label label-success">Active</span></td>--}}
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>V-19544429</td>
                                <td>Victor</td>
                                <td>Albornoz</td>
                                <td>Yogyakarta, Indonesia</td>
                                <td>name@domain.com</td>
                                <td>0412698548</td>
                                {{--<td><span class="label label-success">Active</span></td>--}}
                                <td>
                                    <div class="btn-group btn-group-xs">
                                        <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                        <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>V-17544429</td>
                                <td>Pedro</td>
                                <td>Perez</td>
                                <td>Yogyakarta, Indonesia</td>
                                <td>name@domain.com</td>
                                <td>042476962</td>
                                {{--<td><span class="label label-success">Active</span></td>--}}
                                <td>
                                    <div class="btn-group btn-group-xs">
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