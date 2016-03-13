@extends('layout.master')
@section('content')
@include('includes.flash')
    <a href="{{ route('blog.index') }}" role="button">Back to index</a>
            <h4>Create Blog</h4>
    <!-- Form of all input -->
            {!! Form::model('form-create', [
                'method' => 'post',
                'route' => ['blog.store' , null],
                'class' => 'form-group'
            ]) !!}
                {!! Form::text('title', null , [
                    'class'=>'form-control',
                    'placeholder'=>'Type title here' ]) !!}

                {!! Form::textarea('body', null, [
                    'class' => 'form-control',
                    'column' => '10',
                    'row' => '30',
                    'placeholder' => 'Type something...'
                ]) !!}

                {!! Form::submit('Publish', [
                    'class' => 'btn btn-success'
                ]) !!}
                {!! Form::token() !!}
            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection