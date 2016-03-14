@extends('layout.master')
@section('content')
@include('includes.flash')
    <h4><a href="{{ route('blog.index') }}">Back to index</a></h4>
    <ul class="list-unstyled">
        <li>Id {{ $blog->id }}</li>
        <li>Title {{ $blog->title }}</li>
        <li>Body {{ $blog->body }}</li>
        <li>Created at {{ $blog->created_at }}</li>
    </ul>
    <a href="{{ route('blog.edit', [$blog]) }}">Edit post</a>

<!-- Form of all input -->
            {!! Form::model('blog-destroy', [
                'method' => 'delete',
                'route' => ['blog.destroy' , $blog->id],
                'class' => 'form-group'
            ]) !!}
                {!! Form::submit('Delete', [
                    'class' => 'btn btn-success'
                ]) !!}
            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection