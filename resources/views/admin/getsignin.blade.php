@extends('layout.master')
@section('content')

    <form class="form-signin" action="{{ route('admin.postsignin') }}" method="post">
        <h4>Please Sign in</h4>
        <input name="email" type="text" class="form-control"
               placeholder="Email" value="{{ Request::old('email') }}" />
        <input name="password" class="form-control" type="password"
               placeholder="Password" value="{{ Request::old('password') }}" />
        <input type="checkbox" name="remember" /> Remember
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-default btn-block">Sign in</button>
    </form>
    <h5 style="text-align: center"><a href="{{ route('admin.getsignup') }}">Sign up</a></h5>
@endsection