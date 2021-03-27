<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;

class Utilisateur extends Authenticatable implements JWTSubject
{
    use HasFactory,Notifiable;

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
      // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
