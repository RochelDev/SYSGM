<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PosteFormRequest extends FormRequest
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
            'code_poste' => ['required', 'string', 'max:20', 'unique::postes,code_poste'],
            'intitule_poste' => ['required', 'string', 'max:255'],
            'service' => ['required', 'string', 'max:255'],
            'direction' => ['required', 'string', 'max:255'],
            'structure_id' => ['required', 'integer', Rule::exists('structures', 'id')],
        ];
    }
}
