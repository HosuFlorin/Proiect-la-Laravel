<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContinutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continut', function (Blueprint $table) {
            $table->id();
            $table->dateTime("data");
            $table->integer("idCategorie");
            $table->string('titlu');
            $table->string('descriere');
            $table->integer("idUtilizator");
            $table->integer("idRating");
            $table->boolean('verificat');
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
        Schema::dropIfExists('continut');
    }
}
