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
        Schema::table('users', function (Blueprint $table) {
            // Ajoute la colonne ministere_id à la table users.
            $table->unsignedBigInteger('ministere_id')->nullable();

            // Définit la colonne ministere_id comme une clé étrangère, référençant la colonne id de la table ministeres.
            $table->foreign('ministere_id')
                  ->references('id')
                  ->on('ministeres')
                  ->onDelete('set null'); // Si un ministère est supprimé, la valeur de ministere_id pour les utilisateurs de ce ministère sera mise à null.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
