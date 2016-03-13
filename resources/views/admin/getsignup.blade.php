@extends('layout.master')
@section('content')
    <h4>Sign up</h4>
    <!-- Form of all input -->
        {!! Form::model('form-signup', [
            'method' => 'post',
            'route' => ['admin.postsignup' , ],
            'class' => 'form-group'
        ]) !!}
            {!! Form::text('email', null , [
                'class'=>'form-control',
                'placeholder'=>'Email' ]) !!}

            {!! Form::text('name', null , [
                'class'=>'form-control',
                'placeholder'=>'Name' ]) !!}

            {!! Form::password('password', [
                'class'=>'form-control',
                'placeholder'=>'Password' ]) !!}

            {!! Form::submit('Sign up', [
                'class' => 'btn btn-success'
            ]) !!}
            {!! Form::token() !!}
        {!! Form::close() !!}
    <!-- End : Form of all input -->
@endsection