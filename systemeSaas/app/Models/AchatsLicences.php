<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AchatsLicences extends Model
{
    //
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'achats_licences';
    protected $primaryKey = 'id_achat_licence';
    protected $fillable = [
        'montant_paye',
        'type_paiement',
        'coordonnee',
        'id_licence',
        'statut_paiement'
    ];
}
