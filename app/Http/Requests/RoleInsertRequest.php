<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleInsertRequest extends FormRequest
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
        return [
            'title' => 'required|min:4|max:30|string',
            'permissions' => 'array',
            'permissions.*' => 'exists:permissions,id',
        ];
    }
}
