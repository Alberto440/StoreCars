<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();

        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Metodo para validar que esos campos sean obligatorios
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'//Campo name checkbox de la vista roles.create
        ]);

        //Crear un Rol
        $role = Role::create([
            'name' => $request->name
        ]);

        $role->permissions()->attach($request->permissions);//Acceder a la relación para relacionar el rol al id del permiso 
        return redirect()->route('admin.roles.index')->with('info', ' The Role has been successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)//El array se pasa por la ruta y se recoge aquí
    {
        return view('admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();

        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //Metodo para validar los campos 
        $request->validate([
            'name' => 'required',
            'permissions' => 'required'
        ]);
        $role->update([
            'name' => $request->name
        ]);

        //El metodod sync, elimina todo lo que tiene y vuelve a llenar los datos con el update que se ha hecho.
        $role->permissions()->sync($request->permissions);
        return redirect()->route('admin.roles.edit', $role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('info', 'The role has been successfully eliminated');
    }
}
