<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $user_id = auth()->user()->id;//
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$user_id,
            'phone' => 'required|unique:users,phone,'.$user_id,
        ];
    }
}
