@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Keys</h1>

@stop
@section('content')

    @if (session('status'))
        <div class="alert alert-success alert-dismissible">

            {!! Html::tag(
                'button',
                'x',
                [
                    'class'=> 'close',
                    'data-dismiss'=>'alert'
                ])
            !!}
            <h4>

                {!! Html::tag(
                    'i',
                    '',
                    [
                        'class'=> 'icon fa fa-check'
                    ])
                !!}

                {{ session('status') }}
            </h4>
        </div>
    @endif
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">List</h3>
        </div>
        <div class="box-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>
                        #
                    </th>
                    <th>
                        System Name
                    </th>
                    <th>
                        Enable
                    </th>
                    <th>
                        Type
                    </th>
                    <th>
                        Check Login
                    </th>
                    <th>
                        Manager
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($keys as $key)
                    <tr>
                        <td>
                            {{$key->id}}
                        </td>
                        <td>
                            {{$key->user_id}}
                        </td>
                        <td>
                            <div class="btn-group">
                                {{$key->active}}
                                {!! Html::tag('a','Disable', ['class'=> 'btn btn-danger']) !!}
                            </div>
                        </td>
                        <td>
                            {{$key->type_id}}
                        </td>
                        <td>
                            <div class="btn-group">
                                {{$key->check_login}}
                                {!! Html::tag('a','Disable', ['class'=> 'btn btn-danger']) !!}
                            </div>

                        </td>
                        <td>
                            <div class="btn-group">
                                {!! Html::tag('a','Edit', ['class'=> 'btn btn-danger']) !!}

                                {!! Html::tag('a','Delete', ['class'=> 'btn btn-danger']) !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="box-footer">
            {{ $keys->links() }}
        </div>
    </div>
@stop