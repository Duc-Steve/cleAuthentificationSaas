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
        Schema::create('abonnements', function (Blueprint $table) {
            $table->uuid('id_abonnement')->primary();
            $table->text('montant_annuelle');
            $table->text('date_debut');
            $table->text('date_fin');

            $table->uuid('id_client');
            $table->foreign('id_client')->references('id_client')->on('clients');


            $table->enum('statut_abonnement', ['Actif', 'En attente', 'Suspendu', 'Expiré'])->default('En attente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnements');
    }
};
