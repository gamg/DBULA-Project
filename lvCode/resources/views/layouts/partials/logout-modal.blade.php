<!-- Modal Logout -->
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Cerrando sesión</strong> Confirmación</h3>
        <div>
            <p class="text-center">Estás seguro de querer salir de este asombroso sistema?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">Nope!</button>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   class="btn btn-success md-close">
                    <i class="icon-logout-1"></i>
                    Sí, estoy seguro
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </p>
        </div>
    </div>
</div>
<!-- Modal End -->