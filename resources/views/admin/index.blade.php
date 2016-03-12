<h4>admin.index</h4>
{{ $msg}}
@if(Auth::user())
    <form action="{{ route('admin.signout') }}" method="get">
        <button class="btn btn-danger">Sign out</button>
    </form>
@endif

