<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Abonnements extends Model
{
    //
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'abonnements';
    protected $primaryKey = 'id_abonnement';
    protected $fillable = [
        'montant_annuelle',
        'date_debut',
        'date_fin',
        'id_client',
        'statut_abonnement'
    ];
}
