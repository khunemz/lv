@extends('layout.master')
@section('content')
    <h4><a href="{{ route('blog.index') }}">Back to index</a></h4>
    <ul class="list-unstyled">
        <li>Id {{ $blog->id }}</li>
        <li>Title {{ $blog->title }}</li>
        <li>Body {{ $blog->body }}</li>
        <li>Created at {{ $blog->created_at }}</li>
    </ul>
@endsection