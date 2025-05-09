<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Agent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'matricule',
        'num_NPI',
        'nom',
        'prenom',
        'grade',
        'categorie',
        'historique_poste',
        'date_recrutement',
        'date_debut_service',
        'user_id',
        'ministere_id',
    ];

    /**
     * Get the user that owns the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The ministere that belong to the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ministere(): BelongsTo
    {
        return $this->belongsTo(Ministere::class);
    }

    /**
     * The postes that belong to the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function postes(): BelongsToMany
    {
        return $this->belongsToMany(Poste::class, 'occuper')
                    ->withPivot(['fonction_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }

    /**
     * The fonctions that belong to the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function fonctions(): BelongsToMany
    {
        return $this->belongsToMany(Fonction::class, 'occuper')
                    ->withPivot(['poste_id', 'date_recrutement', 'date_debut_service'])
                    ->withTimestamps();
    }

    

    /**
     * Get all of the dossiers for the Agent
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dossiers(): HasMany
    {
        return $this->hasMany(Dossier::class);
    }
}
