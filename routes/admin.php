<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

/* Todas las rutas que se pongan en este archivo tendrán el prefix admin, esto se define en App/providers/RouteServiceProvider.php  */

/* Usuario actual */
Route::get('/profile', function () {
    $users = User::all();
    if(Auth::user()->hasPermissionTo('View Role List')){
        return view('admin.profileAdmin', compact('users'));//El compact convierte el resultado en un array
    }else{
        return view('admin.profile', compact('users'));
    }
})->middleware('can:View Profile')->name('admin.profile');

/* Borrar los usuarios */
Route::delete('/users/index/{id}', 'Admin\UserController@destroy')->name('admin.destroy');


/* Creador de las 7 rutas al ser resource */
Route::resource('/roles', '\App\Http\Controllers\Admin\RoleController')->middleware('can:View Role List')->names('admin.roles');
Route::resource('/users', '\App\Http\Controllers\Admin\UserController')->middleware('can:CRUD Edit')->names('admin.users');

/* Vista coches anunciados por el user */
Route::resource('advertised-cars', 'Cars\AdsCarController')->only(['index','destroy'])->names('car.ads');