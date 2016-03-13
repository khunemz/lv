@extends('layout.master')
@section('content')
    <a href="{{ route("blog.create") }}" role="button">Create Blog</a>
    @foreach($blogs as $blog)
        <ul class="list-unstyled">
            <li>id {{ $blog->id }}</li>
            <li>title {{ $blog->title }}</li>
            <li>body {{ $blog->body }}</li>
            <li>create {{ $blog->created_at }}</li>
        </ul>
        <a href="{{ route('blog.show', ['blog' => $blog]) }}">Show</a>
    @endforeach
@endsection
