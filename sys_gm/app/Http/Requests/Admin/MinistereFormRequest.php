<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MinistereFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code_ministere' => ['required', 'string', 'max:10', 'unique:ministeres,code_ministere'],
            'nom_ministere' => ['required', 'string', 'max:255', 'unique:ministeres,nom_ministere'],
            'site_ministere' => ['required', 'string', 'url', 'max:255'],
        ];
    }
}
