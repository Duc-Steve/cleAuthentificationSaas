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

class Clients extends Model
{
    //
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'clients';
    protected $primaryKey = 'id_client';
    protected $fillable = [
        'matricule_client',
        'nom_client',
        'numeros_client',
        'type_projet',
        'email',
        'pays_ville',
        'nombre_licence',
        'cle_authentification',
        'password',
        'id_admin',
        'statut_client'
    ];
}
