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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::model($user, ['route' => ['systems/register', $user->id]]) !!}
        <div class="box-body">
            <div class="form-group has-feedback ">
                {!! Form::label('name', 'System Name') !!}
                {!! Form::text('name', '', ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-user form-control-feedback']) !!}
            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('email', 'E-mail Contact System') !!}
                {!! Form::text('email', '', ['class' => 'form-control input-lg ']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-envelope form-control-feedback']) !!}

            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-lock form-control-feedback']) !!}

            </div>
            <div class="form-group has-feedback ">
                {!! Form::label('password_confirmation', 'Password') !!}
                {!! Form::password('password_confirmation',  ['class' => 'form-control input-lg']) !!}
                {!! Html::tag('span','', ['class'=> 'glyphicon glyphicon-log-in form-control-feedback']) !!}

            </div>
        </div>
        <div class="box-footer">
            {!! Form::submit('Send',  ['class' => 'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop