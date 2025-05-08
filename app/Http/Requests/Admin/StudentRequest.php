<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'id' => $this->isMethod('post') ? 'required|unique:users,id|integer|min:1' : 'required',
            'name' => 'required',
            'email' => $this->isMethod('post') ? 'required|email|unique:users,email,' . $this->route('id') : 'required',
            'level' => 'required|numeric|min:0|max:4',
            'password' => $this->isMethod('post') ? 'required' : 'nullable',
            'face_data' => $this->isMethod('post') ? 'required|image' : 'nullable|image',
        ];
    }
}
