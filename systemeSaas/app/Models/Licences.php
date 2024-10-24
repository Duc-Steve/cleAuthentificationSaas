<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Licences extends Model
{
    //
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'licences';
    protected $primaryKey = 'id_licence';
    protected $fillable = [
        'cle_licence',
        'id_client',
        'statut_utilisation'
    ];
}
