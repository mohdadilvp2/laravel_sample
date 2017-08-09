<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('paymen_Id');
            $table->integer('client_Id');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('hours');
            $table->string('weekly_hour_Ids');
            $table->string('in_dollar');
            $table->integer('in_rupees');
            $table->string('paid_date');
            $table->string('paid_to');
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
        Schema::dropIfExists('payments');
    }
}
