<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleInsertRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
    {

        return view('roles.create', [
            'permissions' => Permission::all(),
        ]);
    }

    public function store(RoleInsertRequest $request)
    {
        $role = Role::query()->create($request->only('title'));
        $role->permissions()->attach($request->get('permissions'));
        return redirect('/roles');
    }

    public function show(Role $role)
    {
        //
    }

    public function edit(Role $role)
    {
        return view('roles.edit', [
            'role' => $role,
            'permissions' => Permission::all(),
        ]);
    }

    public function update(RoleUpdateRequest $request, Role $role)
    {
        $role->update($request->only('title'));
        $role->permissions()->sync($request->get('permissions'));
        return redirect('/roles');
    }

    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();
        return redirect('/roles');
    }
}
