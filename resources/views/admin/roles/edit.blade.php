@extends('adminlte::page')
@section('title', 'Edit CRUD')

@section('content_header')
    <h1>Edit Role</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Laravel Collections -->
            {!! Form::model($role, ['route' => ['admin.roles.update', $role], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'mb-3 form-control ' . ($errors->has('name') ? 'is-invalid' : ''), 'placeholder' => 'Enter a name']) !!}
                @error('name')
                    <span class="invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <strong class="mt-4">Permissions</strong>

            @foreach ($permissions as $permission)
                <div>
                    <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach
            @error('permissions')
                <small class="text-danger">
                    <strong>{{ $message }}</strong>
                </small>
                <br>
            @enderror

            {!! Form::submit('Update Role', ['class' => 'btn btn-primary  mt-2']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@stop
