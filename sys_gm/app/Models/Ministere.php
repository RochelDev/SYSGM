<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ministere extends Model
{
    use HasFactory;

    protected $fillable=[
        'code_ministere',
        'nom_ministere', 
        'site_ministere',
    ];


    public function structures(): HasMany
    {
        return $this->hasMany(Structure::class);
    }

    /**
     * Get all of the dossiers for the Ministere
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function dossiers(): HasMany
    {
        return $this->hasMany(Dossier::class);
    }
}
