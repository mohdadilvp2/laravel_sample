<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WeeklyHour', function (Blueprint $table) {
            $table->increments('weekly_hour_id');
            $table->integer('client_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->dateTime('hours');
            $table->dateTime('missing_hour');
            $table->integer('hourly_rate');
            $table->integer('total');
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
       Schema::dropIfExists('WeeklyHour'); 
    }
}
