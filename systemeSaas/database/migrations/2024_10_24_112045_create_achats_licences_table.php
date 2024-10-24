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
        Schema::create('achats_licences', function (Blueprint $table) {
          
            $table->uuid('id_achat_licence')->primary();
            $table->text('montant_paye');
            $table->text('type_paiement');
            $table->text('coordonnee');

            $table->uuid('id_licence');
            $table->foreign('id_licence')->references('id_licence')->on('licences');

            $table->enum('statut_achat_licence', ['En attente de paiement', 'Annnulé', 'Validé']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achats_licences');
    }
};
