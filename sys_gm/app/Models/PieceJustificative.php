<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PieceJustificative extends Model
{
    use HasFactory;

    protected $fillable = [
        'dossier_id',
        'type_piece_id',
        'titre',
        'reference',
        'date',
        'signataire',
        'lien',
        'nom_du_fichier',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    /**
     * Get the type mobilite that owns the piece justificative.
     */
    public function dossier(): BelongsTo
    {
        return $this->belongsTo(Dossier::class);
    }
    /**
     * Get the type piece that owns the piece justificative.
     */
    public function typePiece(): BelongsTo
    {
        return $this->belongsTo(TypePiece::class);
    }
}
