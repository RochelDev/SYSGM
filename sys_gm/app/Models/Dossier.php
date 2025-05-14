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
        'type_demandeur',
        'structure_id',
        'type_mobilite_id',
        'nom_agent',
        'structure_cible',
        'agent_id',
        'statut',
        'annee',
        'type_acte',
        'envoyeur',
        'destinataire',
        'signataire',
        'reference_dossier',
        'contenu_acte',
        'motif_demande',
    ];

    protected $casts = [
        'historique_statut' => 'json',
    ];

    public function structure(): BelongsTo
    {
        return $this->belongsTo(Structure::class);
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
                    ->withPivot('user_id', 'motif', 'statut')
                    ->withTimestamps();
    }

    public function piecesJustificatives(): HasMany
    {
        return $this->hasMany(PieceJustificative::class);
    }

    public function transferts(): HasMany
    {
        return $this->hasMany(DossierTransfert::class, 'dossier_id');
    }

    public static function genererCodeDossier($structureCode)
    {
        $annee = date('Y');
        $lastNumber = self::where('annee', $annee)
                        ->where('code_dossier', 'like', strtoupper($structureCode) . $annee . '%')
                        ->count() + 1;

        return strtoupper($structureCode)
               . $annee
               . str_pad($lastNumber, 4, '0', STR_PAD_LEFT);

    }


    public function structureDestinataire(): BelongsTo
    {
        return $this->belongsTo(Structure::class, 'destinataire');
    }



}
