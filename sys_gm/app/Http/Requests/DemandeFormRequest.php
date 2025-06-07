<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemandeFormRequest extends FormRequest
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
            'code_dossier' => ['required', 'string', 'max:255'],
            'titre' => ['nullable', 'string', 'max:255'],
            'structure_id' => ['required', 'integer', 'exists:structures,id'],
            'type_mobilite_id' => ['required', 'integer', 'exists:type_mobilites,id'],
            'nom_agent' => ['required', 'string', 'max:255'],
            'structure_cible' => ['required', 'string', 'max:255'],
            'agent_id' => ['nullable', 'integer', 'exists:agents,id'],
            'statut' => ['nullable', 'string', 'max:255'],
            'annee' => ['nullable', 'string', 'max:4'], // Limiter à l'année
            'historique_statut' => ['nullable', 'array'], // Peut être nul et doit être un tableau
            'type_acte' => ['nullable', 'string', 'max:255'],
            'envoyeur' => ['nullable', 'string', 'max:255'],
            'destinataire' => ['nullable', 'string', 'max:255'],
            'signataire' => ['nullable', 'string', 'max:255'],
            'contenu_acte' => ['nullable', 'string'], // Peut être nul
            'motif_demande' => ['nullable', 'string'], // Peut être nul
            'contenu_acte' => ['nullable', 'string'], // Assuming you want to validate this if present
            'reference_dossier' => ['nullable', 'string', 'max:255'], // Assuming you want to validate this if present
            'documents.*' => 'nullable|file|max:10240|mimes:pdf,jpeg,png,jpg,doc,docx', // Validate each uploaded file
        ];
    }
}
