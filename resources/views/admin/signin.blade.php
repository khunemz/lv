@extends('layout.master')
@section('content')

    <form class="form-signin" action="{{ route('admin.postsignin') }}" method="post">
        <h4>Sign in</h4>
        <input name="email" type="text" class="form-control" placeholder="Email"/>
        <input name="password" class="form-control" type="password" placeholder="Password"/>
        <input type="checkbox" class="checkbox-inline" /> Remember me
        <button class="btn btn-default btn-block">Sign in</button>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>

    @if(Session::has('message'))
        <span class="success">{{ Session::get('message') }}</span>
    @endif

    @if(count($errors)>0)
        <ul class="list-unstyled">
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection