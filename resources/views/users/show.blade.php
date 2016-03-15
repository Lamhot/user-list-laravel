@extends('layouts.user')
@section('main')
    <h1>Detail User</h1>
    {{ Form::model($user, array('method' => 'get', 'route' => array('users.show', $user->id))) }}
    <ul>
        <li>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username') }}
        </li>
        <li>
            {{ Form::label('password', 'Password:') }}
            {{ Form::text('password') }}
        </li>
        <li>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email') }}
        </li>
        <li>
            {{ Form::label('phone', 'Phone:') }}
            {{ Form::text('phone') }}
        </li>
        <li>
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name') }}
        </li>
    </ul>
    {{ Form::close() }}
@stop