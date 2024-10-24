<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('historique_paiements', function (Blueprint $table) {
    
            $table->uuid('id_historique_paiement')->primary();
            $table->text('montant_paye');
            $table->text('type_paiement');
            $table->text('coordonnee');
            $table->text('nombre_annee');
            $table->text('preuve_paiement');

            $table->uuid('id_abonnement');
            $table->foreign('id_abonnement')->references('id_abonnement')->on('abonnements');

            $table->enum('statut_paiement', ['En attente de paiement', 'Annnulé', 'Validé']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historique_paiements');
    }
};
