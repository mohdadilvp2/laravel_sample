<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeingAtToWeeklyHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('WeeklyHour', function (Blueprint $table) {
             $table->integer('client_id')->unsigned()->change();
             $table->foreign('client_id')->references('client_id')->on('clients');
             $table->float('hours')->nullable()->change();
             $table->float('missing_hour')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('client_id');
        
    }
}
