@extends('layout.master')
@section('content')
    <h4>welcome</h4>
    <a href="{{ route('admin.getsignin') }}">Go to Sign in</a>
    <br />
    <a href="{{ route('blog.index') }}">Go to Blog</a>
@endsection
