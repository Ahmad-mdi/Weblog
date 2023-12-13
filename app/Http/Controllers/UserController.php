<?php

namespace App\Http\Controllers;

use App\Http\Middleware\CheckPermission;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(CheckPermission::class.':read-user')->only('index');
        $this->middleware(CheckPermission::class.':create-user')->only(['create','store']);
        $this->middleware(CheckPermission::class.':create-user')->only(['create','store']);
        $this->middleware(CheckPermission::class.':update-user')->only(['edit','update']);
        $this->middleware(CheckPermission::class.':delete-user')->only('destroy');
    }

    public function index()
    {
        $userList = User::all();
        return view('users.index',[
            'userList' => $userList,
        ]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit(User $user)
    {
        return view('users.edit',[
           'user' => $user,
           'roles' => Role::all(),
        ]);
    }


    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
           'role_id' => $request->get('role_id'),
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'phone' => $request->get('phone'),
        ]);
        return redirect('/users');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users');
    }
}
