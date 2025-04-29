<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Occuper extends Model
{
    use HasFactory;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The primary key composite.
     *
     * @var string[]
     */
    protected $primaryKey = ['poste_id', 'fonction_id', 'agent_id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'poste_id',
        'agent_id',
        'fonction_id',
        'date_recrutement',
        'date_debut_service',
    ];

    /**
     * Get the poste that owns the Occuper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function poste(): BelongsTo
    {
        return $this->belongsTo(Poste::class);
    }

    /**
     * Get the agent that owns the Occuper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    /**
     * Get the fonction that owns the Occuper
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function fonction(): BelongsTo
    {
        return $this->belongsTo(Fonction::class);
    }
}
