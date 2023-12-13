<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function edit()
    {
        return view('profile.ch_pass',[
            'user' => auth()->user(),
        ]);
    }

    public function update(ChangePassRequest $request)
    {
        $user = User::query()->where('id','=',auth()->user()->id)->firstOrFail();
        if (!Hash::check($request->get('currentPass'),$user->password)) {
            return back()->withErrors(['password'=>'password is not correct']);
        }else{
            $user->update([
                'password' => Hash::make($request->get('password')),
            ]);
        }
        return redirect('/profile')->with('updated','the password updated successfully');
    }
}
