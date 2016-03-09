@extends('layout.master')
@section('content')

    <form class="form-signin" action="{{ route('admin.postsignin') }}" method="post">
        <h4>Sign in</h4>
        <input name="email" type="text" class="form-control" placeholder="Email"/>
        <input name="password" class="form-control" type="password" placeholder="Password" />
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <button class="btn btn-default btn-block">Sign in</button>
    </form>

@endsection