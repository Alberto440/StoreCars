@extends('adminlte::page')

@section('title', ' Edit Role')

@section('content_header')
    <h1 >Edit Users</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Name: </h5>
            <p class="form-control">{{ $user->name }}</p>
            <h5>ROLE LIST</h5>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
            @foreach ($roles as $role)
                <div>
                    <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                        {{ $role->name }}
                    </label>
                </div>
            @endforeach
            {!! Form::submit('Assign role', ['class' => 'btn btn-primary mt-2']) !!}
        </div>
    </div>
@stop
