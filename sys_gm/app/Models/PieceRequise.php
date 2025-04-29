<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PieceRequise extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_mobilite_id',
        'type_piece_id',
        'intitule_piece',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Get the type mobilite that owns the piece requise.
     */
    public function typeMobilite(): BelongsTo
    {
        return $this->belongsTo(TypeMobilite::class);
    }

    /**
     * Get the type piece that owns the piece requise.
     */
    public function typePiece(): BelongsTo
    {
        return $this->belongsTo(TypePiece::class);
    }
}
