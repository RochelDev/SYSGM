<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ministere extends Model
{
    use HasFactory;

    protected $fillable=[
        'code_ministere',
        'nom_ministere', 
        'site_ministere',
    ];
}
