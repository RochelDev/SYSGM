<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SuiviDossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'etape_id',
        'dossier_id',
        'user_id',
        'motif',
    ];

    /**
     * Get the etape that owns the suivi dossier.
     */
    public function etape(): BelongsTo
    {
        return $this->belongsTo(Etape::class);
    }

    /**
     * Get the dossier that owns the suivi dossier.
     */
    public function dossier(): BelongsTo
    {
        return $this->belongsTo(Dossier::class);
    }

    /**
     * Get the user that performed the action.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
