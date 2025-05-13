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
        Schema::create('type_pieces', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('modeltype')->nullable(); // Ajout de ->nullable() car ce champ pourrait être optionnel
            $table->timestamps();
        });

        Schema::create('piece_requises', function (Blueprint $table) {
            $table->foreignId('type_mobilite_id')->constrained()->onDelete('cascade');
            $table->foreignId('type_piece_id')->constrained()->onDelete('cascade'); // Ajout de la contrainte de clé étrangère et de l'action en cas de suppression
            $table->string('intitule_piece');
            // La ligne suivante est incorrecte. Une clé étrangère ne peut pas être la clé primaire unique.
            // Si 'type_mobilite_id' doit être la clé primaire, la structure de la table doit être différente (relation un-à-un potentielle).
            // Si vous voulez une clé primaire composite, vous devez inclure l'id de la table.
            $table->primary(['type_mobilite_id', 'type_piece_id']);
            $table->timestamps();
        });

        Schema::create('piece_justificatives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dossier_id')->constrained()->onDelete('cascade'); // Ajout de la contrainte de clé étrangère et de l'action en cas de suppression
            $table->foreignId('type_piece_id')->constrained()->onDelete('cascade'); // Ajout de la contrainte de clé étrangère et de l'action en cas de suppression
            $table->string('titre')->nullable();
            $table->string('reference')->nullable(); // Ajout de ->nullable() car ce champ pourrait être optionnel
            $table->date('date')->nullable(); // Ajout de ->nullable() car ce champ pourrait être optionnel
            $table->string('signataire')->nullable(); // Ajout de ->nullable() car ce champ pourrait être optionnel
            $table->string('lien')->nullable(); // Ajout de ->nullable() car ce champ pourrait être optionnel
            $table->string('nom_du_fichier');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_justificatives');
        Schema::dropIfExists('piece_requises');
        Schema::dropIfExists('type_pieces');
    }
};