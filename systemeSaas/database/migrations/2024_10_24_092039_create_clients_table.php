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
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id_client')->primary();
            $table->text('nom_client');
            $table->text('numeros_client');
            $table->text('type_projet');
            $table->text('email');
            $table->text('pays_ville');
            $table->text('nombre_licence');
            $table->text('cle_authentification');
            $table->text('password');
            $table->uuid('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('administrateurs');
            $table->enum('statut_client', ['actif', 'inactif'])->default('actif');
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
