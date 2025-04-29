<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Fonction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code_fonction',
        'intitule_fonction',
    ];

    /**
     * The postes that belong to the Fonction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function postes(): BelongsToMany
    {
        return $this->belongsToMany(Poste::class, 'occuper')
                    ->withPivot(['agent_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }

    /**
     * The agents that belong to the Fonction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function agents(): BelongsToMany
    {
        return $this->belongsToMany(Agent::class, 'occuper')
                    ->withPivot(['poste_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }
}
