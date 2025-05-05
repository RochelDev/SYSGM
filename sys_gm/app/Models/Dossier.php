<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dossier extends Model
{

    use HasFactory;

    protected $fillable = [
        'code_dossier',
        'titre',
        'ministere_id',
        'type_mobilite_id',
        'agent_id',
        'statut',
        'annee',
        'historique_statut',
        'type_acte',
        'signataire',
        'référence dossier',
        'contenu_acte',
    ];

    protected $casts = [
        'historique_statut' => 'json',
    ];

    public function ministere(): BelongsTo
    {
        return $this->belongsTo(Ministere::class);
    }

    public function typeMobilite(): BelongsTo
    {
        return $this->belongsTo(TypeMobilite::class);
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function etapes(): BelongsToMany
    {
        return $this->belongsToMany(Etape::class, 'suivi_dossiers')
                    ->withPivot('user_id', 'motif')
                    ->withTimestamps();
    }
}
