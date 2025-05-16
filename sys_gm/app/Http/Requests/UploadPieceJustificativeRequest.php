<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadPieceJustificativeRequest extends FormRequest
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
            'titre.*' => 'nullable|string|max:255', // Apply rules to each title
            'type_piece_id.*' => 'nullable|exists:type_pieces,id', // Apply rules to each type_piece_id
            'fichiers.*' => 'required|file|max:10240|mimes:pdf,jpeg,png,jpg,doc,docx', // Apply rules to each file in the 'fichiers' array
        ];
    }

    public function messages()
    {
        return [
            'fichiers.*.required' => 'Le fichier est requis.',
            'fichiers.*.file' => 'Le champ doit contenir un fichier.',
            'fichiers.*.max' => 'Le fichier ne doit pas dépasser 10MB.',
            'fichiers.*.mimes' => 'Les types de fichiers autorisés sont : pdf, jpeg, png, jpg, doc, docx.',
            'titre.*.string' => 'Le titre doit être une chaîne de caractères.',
            'titre.*.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'type_piece_id.*.exists' => 'Le type de pièce sélectionné n\'est pas valide.',
        ];
    }

}
