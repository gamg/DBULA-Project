@extends('layouts.layout')

@section('content')
    <div class="page-heading">
        <h1><i class='fa fa-file'></i> Pedido {{ $order->codigo }}</h1>
    </div>
    @include('partials.message')
    <div class="widget invoice">
        <div class="widget-content padding">
            <div class="row">
                <div class="col-sm-4">

                    <div class="company-column">
                        <h4><img src="{{ asset('corporate/img/inv-logo.png') }}" alt="Logo"></h4><br>
                        <a href="{{url('admin/pedidos')}}" class="btn btn-primary btn-sm"><i class="fa fa-mail-reply"></i> Atrás</a>
                        {{--<address>--}}
                        {{--<br>--}}
                        {{--Local #7<br>--}}
                        {{--local7@local.com <br>--}}
                        {{--<abbr title="Phone">P:</abbr> (123) 456-7890--}}
                        {{--</address>--}}
                    </div>

                </div>
                <div class="col-sm-8 text-right">
                    <h1>Pedido</h1>
                    <h4># {{ $order->codigo }}</h4>
                    {{--<a href="#" class="btn btn-primary btn-sm invoice-print"><i class="icon-print-2"></i> Print</a>--}}
                </div>
            </div>

            <div class="bill-to">
                <div class="row">
                    <div class="col-sm-6">
                        <h4><strong>Dirección de envío</strong></h4>
                        <address>
                            Ejido el Palmmo<br>
                            Calle 4 Casa 77<br>
                            <abbr title="Teléfono">P:</abbr> 0414569789
                        </address>
                    </div>
                    <div class="col-sm-6"><br>
                        <small class="text-right">
                            <p><strong>Fecha : </strong> {{ $order->fecha }}</p>
                            <p><strong>Tipo de Pago: </strong> {{ $order->ivaType->tipo }}</p>
                            @if($order->ivaType->tipo == 'transferencia')
                                <p> 01050007478995669	Mercantil   J-182444297 </p>
                                <p> 01094543765745444	Banesco	    J-369874297 </p>
                                <p> 01965498659854	    Venezuela	J-369852321 </p>
                            @endif
                            <p><strong>Estado del pedido : </strong>
                                <span class="label label-{{ $order->getStatusColor() }}">
                                    {{ $order->estado }}
                                </span>
                            </p>
                            <form method="POST" action="{{ route('admin.orders.update', $order->codigo) }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="col-sm-4 control-label">Selecciona estado</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" name="estado">
                                            <option value="">Selecciona</option>
                                            <option>esperando</option>
                                            <option>procesando</option>
                                            <option>enviado</option>
                                            <option>entregado</option>
                                            <option>cancelado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">Cambiar estado</button>
                                </div>
                            </form>
                        </small>
                    </div>
                </div>
            </div>

            <br><br>

            <div class="table-responsive">
                <table class="table table-condensed table-striped">
                    <thead>
                    <tr>
                        <th>PLATOS</th>
                        <th>CANTIDAD</th>
                        <th>PRECIO UNITARIO (Bs)</th>
                        <th width="100">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->plates as $plate)
                        <tr>
                            <td>{{ $plate->nombre }}</td>
                            <td>{{ $plate->pivot->cantidad }}</td>
                            <td>{{ $plate->pivot->precio_unitario }}</td>
                            <td>{{ $plate->pivot->precio_unitario * $plate->pivot->cantidad }}</td>
                        </tr>
                    @endforeach
                    {{--<tr>--}}
                    {{--<td colspan="3" class="text-right"><strong>Subtotal</strong></td>--}}
                    {{--<td>{{ $plate->pivot->precio_unitario * $plate->pivot->cantidad }}</td>--}}
                    {{--</tr>--}}
                    </tbody>

                    <thead>
                    <tr>
                        <th>BEBIDAS</th>
                        <th>CANTIDAD</th>
                        <th>PRECIO UNITARIO (Bs)</th>
                        <th width="100">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->drinks as $drink)
                        <tr>
                            <td>{{ $drink->nombre }}</td>
                            <td>{{ $drink->pivot->cantidad }}</td>
                            <td>{{ $drink->pivot->precio_unitario }}</td>
                            <td>{{ $drink->pivot->precio_unitario * $drink->pivot->cantidad }}</td>
                        </tr>
                    @endforeach
                    {{--<tr>--}}
                    {{--<td colspan="3" class="text-right"><strong>Subtotal</strong></td>--}}
                    {{--<td>{{ $drink->pivot->precio_unitario * $drink->pivot->cantidad }}</td>--}}
                    {{--</tr>--}}
                    </tbody>

                    <thead>
                    <tr>
                        <th>EXTRAS</th>
                        <th>CANTIDAD</th>
                        <th>PRECIO UNITARIO (Bs)</th>
                        <th width="100">TOTAL</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order->additionals as $extra)
                        <tr>
                            <td>{{ $extra->nombre }}</td>
                            <td>{{ $extra->pivot->cantidad }}</td>
                            <td>{{ $extra->pivot->precio_unitario }}</td>
                            <td>{{ $extra->pivot->precio_unitario * $extra->pivot->cantidad }}</td>
                        </tr>
                    @endforeach
                    {{--<tr>--}}
                    {{--<td colspan="3" class="text-right"><strong>Subtotal</strong></td>--}}
                    {{--<td>{{ $extra->pivot->precio_unitario * $extra->pivot->cantidad }}</td>--}}
                    {{--</tr>--}}
                    <tr>
                        <td colspan="3" class="text-right"><strong>TOTAL</strong></td>
                        <td><strong class="text-primary">{{ $order->total }} Bs</strong></td>
                    </tr>
                    </tbody>
                </table>
                <br><br>
                <h4 class="text-center">Gracias por tu compra!</h4><br><br>
                {{--<p class="text-right payment-methods"><i class="fa fa-cc-visa"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-amex"></i> <i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-stripe"></i></p>--}}
            </div>
        </div>
    </div>
@endsection