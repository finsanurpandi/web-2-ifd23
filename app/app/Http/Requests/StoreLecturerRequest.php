<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Nidn;

class StoreLecturerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'min:8|required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required',
            'password' => 'min:8|required',
            'department_id' => 'required',
            'nidn' => ['required', 'digits:10', new Nidn],
            'address' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'username.min' => 'Username harus terdiri setidaknya 8 karakter',
        ];
    }
}
