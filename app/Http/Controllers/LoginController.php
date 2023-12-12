<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('authentication.login');
    }

    public function store(LoginRequest $request)
    {
        $user = User::query()->where('phone',$request->phone)->firstOrFail();
        if (!Hash::check($request->get('password'),$user->password)) {
            return redirect()->back()->withErrors(['password'=>'password is not correct']);
        }
        auth()->login($user);
        return redirect('/');
    }

    //logout:
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
