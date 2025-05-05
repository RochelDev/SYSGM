<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Poste extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code_poste',
        'intitule_poste',
        'service',
        'direction',
        'structure_id',
    ];

    /**
     * Get the structure that owns the Poste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function structure(): BelongsTo
    {
        return $this->belongsTo(Structure::class);
    }

    /**
     * The agents that belong to the Poste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'occuper')
                    ->withPivot(['fonction_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }

    /**
     * The fonctions that belong to the Poste
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fonctions(): BelongsToMany
    {
        return $this->belongsToMany(Fonction::class, 'occuper')
                    ->withPivot(['agent_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }
}
