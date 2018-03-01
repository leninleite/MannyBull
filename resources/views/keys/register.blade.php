@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Register</h1>

@stop
@section('content')
    <p>You are logged in!</p>
    {!! Form::model($keys, ['route' => ['keys/register', $keys->id]]) !!}

{!! Form::close() !!}
@stop