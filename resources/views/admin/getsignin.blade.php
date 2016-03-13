@extends('layout.master')
@section('content')

    <form class="form-signin" action="{{ route('admin.postsignin') }}" method="post">
        <h4>Please Sign in</h4>
        <input name="email" type="text" class="form-control" placeholder="Email"/>
        <input name="password" class="form-control" type="password" placeholder="Password" />
        <input type="checkbox" name="remember" /> Remember
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-default btn-block">Sign in</button>
    </form>
    <a href="{{ route('admin.getsignup') }}"><h5 style="text-align: center">Sign up</h5></a>
@endsection