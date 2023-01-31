<?php namespace Adam\Arrival\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('adam_arrival_arrivals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->string('time');
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::dropIfExists('adam_arrival_arrivals');
    }
}
