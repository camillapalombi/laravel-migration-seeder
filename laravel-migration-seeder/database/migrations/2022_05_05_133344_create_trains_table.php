<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departureStation', 20);
            $table->string('arrivalStation', 20);
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->string('trainCode',20);
            $table->bigInteger('carriagesNumber')->nullable();
            $table->boolean('onTime')->nullable();
            $table->boolean('Cancelled');
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
        Schema::dropIfExists('trains');
    }
}
