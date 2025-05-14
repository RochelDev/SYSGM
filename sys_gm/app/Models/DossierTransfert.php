<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DossierTransfert extends Model
{
    use HasFactory;

    protected $fillable = [
        'dossier_id',
        'envoyeur_structure_id',
        'destinataire_structure_id',
        'date_transfert',
        'motif',
    ];

    public function dossier(): BelongsTo
    {
        return $this->belongsTo(Dossier::class);
    }

    public function envoyeur(): BelongsTo
    {
        return $this->belongsTo(Structure::class, 'envoyeur_structure_id');
    }

    public function destinataire(): BelongsTo
    {
        return $this->belongsTo(Structure::class, 'destinataire_structure_id');
    }
}