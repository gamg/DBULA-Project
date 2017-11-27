@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-edit'></i> Direcciones de envío</h1>
        <h3>Gestionar mis direcciones</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="widget">
                <div class="widget-header transparent">
                    <h2><strong>Direcciones</strong> de envío</h2>
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
                                    <a class="btn btn-success"><i class="fa fa-plus-circle"></i> Crear nueva</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table data-sortable class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Dirección</th>
                                <th data-sortable="false">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Ut mauris erat, hendrerit eget feugiat</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Integer laoreet augue sit amet nisl rutrum</td>
                                    <td>
                                        <div class="btn-group btn-group-xs">
                                            <a data-toggle="tooltip" title="Editar" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <a data-toggle="tooltip" title="Eliminar" class="btn btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ut sit amet commodo purus. Ut quis tempor lectus. Aenean erat nunc.</td>
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