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
        Schema::create('licences', function (Blueprint $table) {
            $table->uuid('id_licence')->primary();
            $table->text('cle_licence');

            $table->uuid('id_client');
            $table->foreign('id_client')->references('id_client')->on('clients');


            $table->enum('statut_utilisation', ['Oui', 'Non'])->default('Non');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licences');
    }
};