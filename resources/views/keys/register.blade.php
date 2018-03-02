@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>System</h1>

@stop
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Register</h3>
        </div>
        {!! Form::model($keys, ['route' => ['keys/register', $keys->id]]) !!}
        <div class="box-body">
            <div class="form-group has-feedback ">
                {!! Form::label('user[name]', 'Name') !!}
                {!! Form::text('user[name]', '', ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-user form-control-feedback']) !!}
            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('user[email]', 'E-mail') !!}
                {!! Form::text('user[email]', '', ['class' => 'form-control input-lg ']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-envelope form-control-feedback']) !!}

            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('user[password]', 'Password') !!}
                {!! Form::password('user[password]', ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-lock form-control-feedback']) !!}

            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('user[confirm-password]', 'Password') !!}
                {!! Form::password('user[confirm-password]',  ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-log-in form-control-feedback']) !!}

            </div>
        </div>
        <div class="box-footer">
            {!! Form::submit('Send',  ['class' => 'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop