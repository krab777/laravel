<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // dd($this->user->id);
        return [
            'name' => 'required|string|min:2',
            'email' => 'required|string|min:2|unique:users,email,' . $this->user->id,          
            'password' => 'nullable|string|min:2',
        ];
    }
}
