<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vin', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->integer('quantite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vin');
    }
}
