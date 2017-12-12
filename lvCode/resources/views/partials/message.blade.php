@if(Session::has('message'))
    <div class="alert alert-{{ Session::get('message')['alert'] }}" role="alert">
        <strong>{{ Session::get('message')['text'] }}</strong>
    </div>
@endif