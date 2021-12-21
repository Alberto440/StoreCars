@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1 id="UserPrueba">Users</h1>
@stop

@section('content')
    {{-- Libreria de JS datatables.net --}}
    <table style="container-fluid" id="users" class="table table-striped table-bordered shadow-lg mt-4">
        <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">GMAIL</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">ROLE</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr class="smBreak text-center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-break">{{ $user->password }}</td>
                    <td>
                        @foreach ($user->getRoleNames() as $rolNombre)
                            {{ $rolNombre }}
                        @endforeach
                    </td>

                    <td style="display: flex;">
                        <a class="btn btn-outline-success" href="{{ route('admin.users.edit', $user) }}">EditRole</a>
                        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#modal-delete-{{ $user->id }}">
                            Delete
                        </button>
                    </td>
                </tr>
                @include('admin.users.delete')
            @endforeach
        </tbody>
    </table>
@stop


@section('css')
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#users').DataTable({
                "lengthMenu": [
                    [5, 10, 50, -1],
                    [5, 10, 50, "All"]
                ]
            });
        });
    </script>
@stop
