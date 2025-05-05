<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StructureFormRequest extends FormRequest
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
            'code_structure' => ['required', 'string', 'max:10', 'unique::structures,code_structure' ],
            'nom_structure' => ['required', 'string', 'max:255', 'unique::structures,nom_structure'],
            'ministere_id' => ['required', 'integer', Rule::exists('ministeres', 'id')],
        ];
    }
}
