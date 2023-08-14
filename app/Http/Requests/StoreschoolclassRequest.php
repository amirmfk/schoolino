<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreschoolclassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'base' => 'required',
            'Major' => 'required',
            'school-id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'A  name is required',
            'base.required' => 'A base Address is required',
            'Major.required' => 'A Major name is required',
            'school-id' => 'A school-id is required',
        ];
    }
}

