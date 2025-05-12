<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ministere_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->name)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    /**
     * The ministere that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ministere(): BelongsTo
    {
        return $this->belongsTo(Ministere::class);
    }


    /**
     * The roles that belong to the user.
     */
    public function profils(): BelongsToMany
    {
        return $this->belongsToMany(Profil::class, 'user_profils')
                    ->withPivot('statut')
                    ->withTimestamps();
    }

    public function profilActif()
    {
        return $this->profils()->wherePivot('statut', 'actif')->first();
    }

    public function setProfilActif(int $profilId): void
    {
        // Désactive tous les profils actifs précédents pour cet utilisateur
        $this->profils()->wherePivot('user_id', $this->id)
        ->update(['statut' => 'inactif']);

        //déboggage pour voir le nombre de lignes mises à jour
        /*$updatedCount = $this->profils()->wherePivot('user_id', $this->id)->update(['statut' => 'inactif']);
        dd('Nombre de lignes mises à jour à inactif : ', $updatedCount);*/

        // Active le nouveau profil
        $this->profils()->updateExistingPivot($profilId, ['statut' => 'actif'], false);

        
        // Désactive tous les profils actifs précédents : cette ligne ne marchait pas
        // $this->profils()->updateExistingPivot($this->id, ['statut' => 'inactif'], false);

        //ce qui ne marchait pas : déboggage retourne zéro ligne mis à jour
        /* $updatedCount = $this->profils()->wherePivot('statut', 'actif')->updateExistingPivot($this->id, ['statut' => 'inactif'], false);
        dd('Nombre de lignes mises à jour à inactif : ', $updatedCount);*/

       
    }

        
    
}
