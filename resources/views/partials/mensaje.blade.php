@if(session()->has('mensaje'))
    <div class="alert {{ session('alert-type', 'alert-info')}} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" type="color" value="#ff0000"></button>
        {{ session('mensaje')}}
    </div>
@endif
