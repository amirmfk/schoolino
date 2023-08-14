<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
            'school-name' => 'required',
            'school-address' => 'required',
            'manager-name' => 'required',
            'base' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'school-name.required' => 'A School name is required',
            'school-address.required' => 'A School Address is required',
            'manager-name.required' => 'A Manager name is required',
            'base.required' => 'A Base is required',
        ];
    }
}
