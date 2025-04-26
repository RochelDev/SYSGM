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
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('matricule')->unique();
            $table->string('num_NPI')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('grade');
            $table->string('categorie');
            $table->string('historique_poste')->nullable();
            $table->date('date_recrutement');
            $table->date('date_debut_service');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->timestamps();
        });

        Schema::create('occuper', function (Blueprint $table) {
            $table->foreignId('poste_id')->constrained()->onDelete('cascade');
            $table->foreignId('agent_id')->constrained()->onDelete('cascade');
            $table->foreignId('fonction_id')->constrained()->onDelete('restrict');
            $table->date('date_recrutement')->nullable();
            $table->date('date_debut_service')->nullable();
            $table->primary(['poste_id', 'fonction_id', 'agent_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occuper');
        Schema::dropIfExists('agents');
    }
};
