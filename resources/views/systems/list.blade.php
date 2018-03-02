@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Systems</h1>

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
                        E-Mail
                    </th>
                    <th>
                        Keys
                    </th>
                    <th>
                        Log
                    </th>
                    <th>
                        Manager
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>
                            {{$user->id}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            <div class="btn-group">
                                {!! Html::tag('a','Register', ['class'=> 'btn btn-info']) !!}
                                {!! Html::tag('a','List', ['class'=> 'btn btn-info']) !!}
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                {!! Html::tag('a','Show', ['class'=> 'btn btn-warning']) !!}
                            </div>
                        </td>
                        <td>
                            <div class="btn-group">
                                {!! Html::tag('a','Edit', ['class'=> 'btn btn-danger']) !!}
                                {!! Html::tag('a','Disable', ['class'=> 'btn btn-danger']) !!}
                                {!! Html::tag('a','Delete', ['class'=> 'btn btn-danger']) !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="box-footer">
            {{ $users->links() }}
        </div>
    </div>
@stop