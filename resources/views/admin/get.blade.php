@extends('layout.master')
@section('content')
    <h4>Get</h4>
    @foreach($users as $user)
        <ul>
            <li>ID {{ $user->id }}</li>
            <li>Email {{ $user->email }}</li>
            <li>Name {{ $user->name }}</li>
            <li>Admin ?? {{ $user->isAdmin }}</li>
        </ul>
    @endforeach

    <!-- Form of all input -->
            {!! Form::model('getsignout', [
                'method' => 'get',
                'route' => ['admin.getsignout'],
                'class' => 'form-group'
            ]) !!}
                {!! Form::submit('Get Sign out', [
                    'class' => 'btn btn-success'
                ]) !!}
                {!! Form::token() !!}
            {!! Form::close() !!}
        <!-- End : Form of all input -->
@endsection