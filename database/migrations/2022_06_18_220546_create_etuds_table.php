<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Etud', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('prenom');
            $table->string('cycle');
            $table->string('niveau');
            $table->string('email');
            $table->string('photo');
            $table->date('annee_accademique');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Etud');
    }
}
