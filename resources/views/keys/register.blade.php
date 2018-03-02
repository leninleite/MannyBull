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
            <div class="form-group ">
                {!! Form::label('user_id', 'Users') !!}
                {!! Form::select('user_id', $users, null, ['class'=>' form-control']); !!}
            </div>
            <div class="form-group ">
                {!! Form::label('user_id', 'Type of Keys') !!}
                {!! Form::select('type_keys', $type_keys,null, ['class'=>' form-control']); !!}
            </div>
            <div class="form-group ">
                <div class="checkbox ">
                    <label>
                        {!! Form::checkbox('active',true); !!}
                        Activated ?
                    </label>
                    
                </div>
                <div class="checkbox ">
                    <label>
                        {!! Form::checkbox('check_login',true); !!}
                        Check Login ?
                    </label>
                    
                </div>

            </div>
            <div class="form-group ">
                {!! Form::label('ips', 'Opened IPS : ') !!}
                {{ Form::textarea('ips', null, ['size' => '120x10', 'class'=> 'form-control']) }}
            </div>
            <div class="form-group ">
                {!! Form::label('key', 'Key ') !!}
                {{ Form::textarea('key', null, ['class'=> 'form-control']) }}
            </div>
        </div>
        <div class="box-footer">
            {!! Form::submit('Send',  ['class' => 'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@stop