@extends('adminlte::page')

@section('title', 'Create CRUD')

@section('content_header')
    <h1>Role Create</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <!-- Laravel Collective -->
            {!! Form::open(['route' => 'admin.roles.store']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name', null, ['class' => 'mb-3 form-control ' . ($errors->has('name') ? 'is-invalid' : ''), 'placeholder' => 'Enter a name']) !!}
                @error('name'){{-- Si no se escribe el nombre del rol --}}
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
            @error('permissions'){{-- Si no se seleccionan permisos --}}
                <small class="text-danger">
                    <strong>{{ $message }}</strong>
                </small>
                <br>
            @enderror

            {!! Form::submit('Role Creator', ['class' => 'btn btn-primary  mt-2']) !!}
            {!! Form::close() !!}

        </div>
    </div>
@endsection
