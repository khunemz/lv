@extends('layout.master')
@section('content')
@include('includes.flash')
    <h4 style="text-align: center;">Edit</h4>
    <!-- Form of all input -->
            {!! Form::model('blog', [
                'method' => 'patch',
                'route' => ['blog.update' , $blog],
                'class' => 'form-group'
            ]) !!}
                {!! Form::text('title', $blog->title , [
                    'class'=>'form-control',
                    'placeholder'=>'' ]) !!}

                {!! Form::textarea('body', $blog->body, [
                    'class' => 'form-control',
                    'column' => '10',
                    'row' => '30',
                    'placeholder' => 'Type something...'
                ]) !!}

                {!! Form::submit('Save Edit', [
                    'class' => 'btn btn-success'
                ]) !!}
            {!! Form::close() !!}
        <!-- End : Form of all input -->
    <a href="{{ route('blog.index') }}">Back to Home</a> |
    <a href="{{ route('blog.show', ['blog'=>$blog]) }}">Back to show</a>
@endsection