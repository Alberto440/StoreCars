@extends('adminlte::page')
@section('title', 'StoreCars Dashboard')

@section('content')

<h2 class="text-center">StoreCars website statistics</h2>
    <div id="dashboard" class="row container-fluid" style="text-align: center; margin-top:20px;">

        <div class="col-6">
            <div class="bg-blue order-card">
                <h5>Users</h5>
                @php
                    use App\Models\User;
                    $user = User::count();
                @endphp
                <h2 class="text-rigth"><i class="fa fa-users f-left"></i><span> {{ $user }}</span> </h2>
            </div>
            <div class="bg-red order-card">
                <h5>Roles</h5>
                @php
                    use Spatie\Permission\Models\Role;
                    $role = Role::count();
                @endphp
                <h2 class="text-rigth"><i class="fa fa-user-tag"></i><span> {{ $role }}</span></h2>
            </div>
        </div>

        <div class="col-6">
            <div class="bg-yellow order-card">
                <h5>Permissions</h5>
                @php
                    use Spatie\Permission\Models\Permission;
                    $permission = Permission::count();
                @endphp
                <h2 class="text-rigth"><i class="fa fa-user-cog"></i><span> {{ $permission }}</span> </h2>
            </div>
            <div class="bg-green order-card">
                <h5>Cars</h5>
                @php
                    use App\Models\car_dates;
                    $car = car_dates::count();
                @endphp
                <h2 class="text-rigth"><i class="fa fa-car"></i><span> {{ $car }}</span> </h2>
            </div>
        </div>
    </div>

@stop
