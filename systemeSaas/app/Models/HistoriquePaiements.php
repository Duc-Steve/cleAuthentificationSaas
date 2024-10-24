<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HistoriquePaiements extends Model
{
    //
    // Utilise les traits nécessaires
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    protected $table = 'historique_paiements';
    protected $primaryKey = 'id_historique_paiement';
    protected $fillable = [
        'montant_paye',
        'type_paiement',
        'coordonnee',
        'nombre_annee',
        'preuve_paiement',
        'id_abonnement',
        'statut_paiement'
    ];
}
