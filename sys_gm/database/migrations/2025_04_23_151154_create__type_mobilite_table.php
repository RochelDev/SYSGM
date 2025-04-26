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
        Schema::create('type_mobilites', function (Blueprint $table) {
            $table->id();
            $table->string('intitule_mobilite')->unique();
            $table->timestamps();
        });

        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('code_dossier')->unique();
            $table->string('titre');
            $table->foreignId('ministere_id')->constrained();
            $table->foreignId('type_mobilite_id')->constrained();
            $table->foreignId('agent_id')->constrained();
            $table->string('statut')->default('en_attente');
            $table->year('annee');
            $table->json('historique_statut')->nullable();
            $table->string('type_acte');
            $table->string('signataire');
            $table->string('référence dossier');
            $table->string('contenu_acte');
            $table->timestamps();
        });

        Schema::create('etapes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('ordre');
            $table->string('delai_max');
            $table->timestamps();
        });


        Schema::create('suivi_dossiers', function (Blueprint $table) {
            $table->foreignId('etape_id')->constrained();
            $table->foreignId('dossier_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained();
            $table->string('motif')->nullable();
            $table->primary(['etape_id', 'dossier_id', 'user_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suivi_dossiers');
        Schema::dropIfExists('etapes');
        Schema::dropIfExists('dossiers');
        Schema::dropIfExists('types_mobilites');
    }
};
