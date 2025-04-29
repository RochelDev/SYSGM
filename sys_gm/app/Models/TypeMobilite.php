<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeMobilite extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'intitule_mobilite',
    ];

    /**
     * Get all of the dossiers for the TypeMobilite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dossiers(): HasMany
    {
        return $this->hasMany(Dossier::class);
    }

    /**
     * The typePieces that belong to the TypeMobilite
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function typePieces(): BelongsToMany
    {
        return $this->belongsToMany(TypePiece::class, 'piece_requises', 'type_mobilite_id', 'type_piece_id')
                    ->withPivot(['intitule_piece'])
                    ->withTimestamps();
    }

    /**
     * Get all of the pieceJustificatives for the TypeMobilite
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pieceJustificatives(): HasMany
    {
        return $this->hasMany(PieceJustificative::class);
    }
}
