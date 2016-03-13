@if(Session::has('flash_notification.message'))
    <center>
    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;</button>

        {{ Session::get('flash_notification.message') }}
    </div>
    </center>
@endif

@if(!empty($errors))
    @foreach($errors->all() as $error)
    <div class="error-block">
        <ul class="list-unstyled">
            <li style="text-align: center; color: red;">{{ $error }}</li>
        </ul>
    </div>
    @endforeach
@endif
