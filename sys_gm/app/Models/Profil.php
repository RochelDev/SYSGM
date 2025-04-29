<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profil extends Model
{
    use HasFactory;

    protected $fillable = [
        'intitule_profil',
    ];


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_profils')
                    ->withPivot('statut')
                    ->withTimestamps();
    }
}
