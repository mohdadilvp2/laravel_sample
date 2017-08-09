<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignAtToPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('payments', function (Blueprint $table) {
             $table->integer('client_Id')->unsigned()->change();
             $table->foreign('client_Id')->references('client_id')->on('clients');
             $table->integer('paid_to')->unsigned()->change();
             $table->foreign('paid_to')->references('id')->on('users');
             $table->float('hours')->nullable()->change();
             $table->float('weekly_hour_Ids')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropColumn('client_Id');
        $table->dropColumn('paid_to');
    }
}
