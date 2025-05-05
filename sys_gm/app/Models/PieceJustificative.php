<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PieceJustificative extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_mobilite_id',
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
    public function typeMobilite(): BelongsTo
    {
        return $this->belongsTo(TypeMobilite::class);
    }
    /**
     * Get the type piece that owns the piece justificative.
     */
    public function typePiece(): BelongsTo
    {
        return $this->belongsTo(TypePiece::class);
    }
}
