<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->lenght(60);
            $table->string('prenom')->lenght(60);
            $table->string('adresse')->lenght(255);
            $table->integer('gsm');
            $table->string('email')->lenght(255);
            $table->string('mdp')->lenght(60);
            $table->string('numero_inami')->unique;
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
        Schema::dropIfExists('medecin');
    }
}
