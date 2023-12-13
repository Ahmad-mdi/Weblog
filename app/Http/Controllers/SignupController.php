<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function create()
    {
        return view('authentication.signup');
    }

    public function store(SignupRequest $request)
    {
        $normalUser = Role::query()
            ->where('title','normal-user')
            ->first();
        $user = User::query()->create([
            'role_id' => $normalUser->id,
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
        ]);
        auth()->login($user); //true login users
        return redirect('/');
    }
}
