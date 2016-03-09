@extends('layout.master')
@section('content')
    <h4>Sign in</h4>
    <form class="form-control" action="{{ route('postsignin') }}">
        <input name="email text" class="form-control" placeholder="Email"/>
        <input name="password" class="form-control" type="password" placeholder="Password"/>
        <button class="btn btn-default">Sign in</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection