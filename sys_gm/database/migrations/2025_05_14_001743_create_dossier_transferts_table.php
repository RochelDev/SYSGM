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
        Schema::create('dossier_transferts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')->constrained('dossiers');
            $table->foreignId('envoyeur_structure_id')->constrained('structures');
            $table->foreignId('destinataire_structure_id')->constrained('structures');
            $table->timestamp('date_transfert')->useCurrent();
            $table->text('motif')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossier_transferts');
    }
};
