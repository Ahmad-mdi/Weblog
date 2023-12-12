<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $user= auth()->user();
         if (auth()->check())
             return view('profile.show', compact('user'));
         else
             abort(401,);

    }

    public function edit()
    {
        $user = auth()->user();
        if (auth()->check())
            return view('profile.edit', compact('user'));
        else
            abort(401,);

    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = auth()->user();
        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
        ]);
        return redirect('/profile');
    }
}
