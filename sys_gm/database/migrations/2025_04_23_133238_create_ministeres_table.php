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
        Schema::create('ministeres', function (Blueprint $table) {
            $table->id();
            $table->string('code_ministere', 10)->unique();
            $table->string('nom_ministere')->unique();
            $table->string('site_ministere');
            $table->timestamps();
        });

        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->string('code_structure', 10)->unique();
            $table->string('nom_structure')->unique();
            $table->foreignId('ministere_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('postes', function (Blueprint $table) {
            $table->id();
            $table->string('code_poste', 20)->unique();
            $table->string('intitule_poste');
            $table->string('service');
            $table->string('direction');
            $table->foreignId('structure_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('fonctions', function (Blueprint $table) {
            $table->id();
            $table->string('code_fonction', 20)->unique();
            $table->string('intitule_fonction');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('structures');
        Schema::dropIfExists('postes');
        Schema::dropIfExists('fonctions');
        Schema::dropIfExists('ministeres');
    }
};
