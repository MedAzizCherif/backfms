<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $table = "utilisateurs";
    public $timestamps = false;

     protected $fillable = [
        'id', 
        'nom',	
        'prenom',
        'login',
        'verification_login',
        'profil',
        'etat',
        'frl',
        //'created_at',
        //'updated_at', 
     ];
}
