<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('stagiaires', function (Blueprint $table) {
            $table->date('date_debut')->nullable()->after('validestagiaire');
        });
    }
    
    public function down()
    {
        Schema::table('stagiaires', function (Blueprint $table) {
            $table->dropColumn('date_debut');
        });
    }
    
};
