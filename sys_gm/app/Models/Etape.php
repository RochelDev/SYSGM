<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Etape extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'ordre',
        'delai_max',
    ];

    /**
     * The dossiers that belong to the etape.
     */
    public function dossiers(): BelongsToMany
    {
        return $this->belongsToMany(Dossier::class, 'suivi_dossiers')
                    ->withPivot(['user_id', 'statut', 'motif'])
                    ->withTimestamps();
    }

    /**
     * Get the suivi dossiers for the etape.
     */
    public function suiviDossiers(): HasMany
    {
        return $this->hasMany(SuiviDossier::class);
    }
}
