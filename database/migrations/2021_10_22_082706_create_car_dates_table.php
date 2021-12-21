<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarDatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_dates', function (Blueprint $table) {
            $table->id();
            /*Aqui va la fila user_id que esta añadida en otra migración*/
            $table->string('Name', 40);
            $table->string('img');
            $table->string('Transmission_type');
            $table->integer('Year')->unsigned();//integer (numero entero int)
            $table->integer('Price')->unsigned();
            $table->string('Bodywork');
            $table->string('Fuel_type');
            $table->integer('Mileage')->unsigned();
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
        Schema::dropIfExists('car_dates');
    }
}
