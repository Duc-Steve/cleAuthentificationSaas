<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use Carbon\Carbon;

//model et mail
use Illuminate\Support\Facades\Crypt;

class Administrateurs extends Model implements AuthenticatableContract
{
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, Authenticatable, HasUuids;

    /**
     * @property string $id_admin
     */
    
    protected $table = 'administrateurs';
    protected $primaryKey = 'id_admin';
    protected $fillable = [
        'matricule_admin',
        'nom_prenom',
        'email',
        'numeros',
        'password',
        'type_admin',
        'statut_compte',
    ];


    
    //pour la connexion
    public static function login($credentials)
    {
        if (Auth::guard('administrateur')->attempt($credentials)) {
            // L'authentification a réussi
            return true;
        } else {
            // L'authentification a échoué
            return false;
        }
    }
}
