@extends('layout.master')
@section('content')
    @if(Auth::user())
    @include('includes.flash')
        <h4 style="text-align: center">Sign up</h4>
        <!-- Form of all input -->
            {!! Form::model('form-signup', [
                'method' => 'post',
                'route' => ['admin.postsignup' , ],
                'class' => 'form-signup form-group'
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
            {!! Form::close() !!}
        <!-- End : Form of all input -->
    @endif
        <h5 style="text-align: center;"><a href="{{ route('admin.getsignin') }}">Has an account ??</a></h5>
@endsection