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
@endsection