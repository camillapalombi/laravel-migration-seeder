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
            $table->string('departureStation', 100);
            $table->string('arrivalStation', 100);
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->string('trainCode',100);
            $table->bigInteger('carriagesNumber')->nullable();
            $table->boolean('onTime')->nullable();
            $table->boolean('Cancelled');
            $table->date('date');
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
