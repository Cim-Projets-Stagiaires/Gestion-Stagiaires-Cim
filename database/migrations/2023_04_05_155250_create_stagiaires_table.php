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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_de_famille');
            $table->string('prenom');
            $table->string('email');
            $table->string('photo'); // Consider specifying a length, e.g., $table->string('photo', 100);
            $table->string('semi_rapport_de_stage')->nullable();
            $table->string('rapport_finale_de_stage')->nullable();
            $table->date('date_de_fin_de_stage')->nullable();
            $table->string('pdf_cv');
            $table->string('demande_de_stage')->nullable();
            $table->string('assurance')->nullable();
            $table->string('etablissement'); // Consider specifying a length, e.g., $table->string('etablissement', 50);
            $table->string('pole'); // Consider specifying a length, e.g., $table->string('pole', 20);
            $table->boolean('validestagiaire');
            $table->integer('duree_de_stage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    
    {
        Schema::dropIfExists('stagiaires');
    }
};
