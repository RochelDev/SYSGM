<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Structure extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code_structure',
        'nom_structure',
        'ministere_id',
    ];

    /**
     * Get the ministere that owns the Structure
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ministere(): BelongsTo
    {
        return $this->belongsTo(Ministere::class);
    }

    /**
     * Get all of the postes for the Structure
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function postes(): HasMany
    {
        return $this->hasMany(Poste::class);
    }
}
