@extends('layouts.login')

@section('title')
    Iniciar sesión
@stop

@section('content')
    <div class="full-content-center">
        <p class="text-center"><a href="#"><img src="{{ asset('corporate/img/login-logo.png') }}" alt="Logo"></a></p>
        <div class="login-wrap animated flipInX">
            <div class="login-block">
                <img src="{{ asset('corporate/images/users/default-user.png') }}" class="img-circle not-logged-avatar">
                @include('partials.errors')
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group login-input">
                        <i class="fa fa-user overlay"></i>
                        <input type="email" class="form-control text-input" placeholder="Tu e-mail" name="correo" value="{{ old('correo') }}" required>
                    </div>
                    <div class="form-group login-input">
                        <i class="fa fa-key overlay"></i>
                        <input type="password" class="form-control text-input" placeholder="********" name="password" required>
                    </div>

                    {{--<div class="form-group">--}}
                        {{--<div class="checkbox">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" name="remember"> Recuerdame--}}
                            {{--</label>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    <div class="row">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success btn-block">ENTRAR</button>
                        </div>
                        <div class="col-sm-6">
                            <a href="{{ route('register') }}" class="btn btn-default btn-block">Registrate</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection