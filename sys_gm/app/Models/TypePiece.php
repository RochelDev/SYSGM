<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypePiece extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'modeltype',
    ];

    /**
     * The type mobilites that belong to the type piece.
     */
    public function typeMobilites(): BelongsToMany
    {
        return $this->belongsToMany(TypeMobilite::class, 'piece_requises', 'type_piece_id', 'type_mobilite_id')
                    ->withPivot('intitule_piece')
                    ->withTimestamps();
    }

    /**
     * Get the piece justificatives for the type of piece.
     */
    public function pieceJustificatives(): HasMany
    {
        return $this->hasMany(PieceJustificative::class);
    }

}
