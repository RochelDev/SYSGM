<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TypeMobiliteFormRequest extends FormRequest
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
            'intitule_mobilite' => ['required', 'string', 'max:255', Rule::unique('type_mobilites')->ignore($this->type_mobilite)],
            'code_type' => ['required', 'string', 'max:10', Rule::unique('type_mobilites')->ignore($this->type_mobilite)],
        ];
    }
}
