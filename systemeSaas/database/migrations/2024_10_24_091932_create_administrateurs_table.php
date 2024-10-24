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
        Schema::create('administrateurs', function (Blueprint $table) {
            
            $table->uuid('id_admin')->primary();
            $table->text('matricule_admin');
            $table->text('nom_prenom');
            $table->text('email');
            $table->text('numeros');
            $table->text('password');
            //$table->text('type_admin');
            $table->enum('statut_compte', ['Actif', 'Supprimer'])->default('actif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrateurs');
    }
};
