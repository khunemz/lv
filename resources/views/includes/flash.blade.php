@if(Session::has('flash_notification.message'))
    <div class="alert alert-{{ Session::get('flash_notification.lavel') }}">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            $times;</button>

        {{ Session::get('flash_notification.message') }}
    </div>
@endif

@if(!empty($errors))
    @foreach($errors->all() as $error)
        <ul>
            <li>{{ $error }}</li>
        </ul>
    @endforeach
@endif
