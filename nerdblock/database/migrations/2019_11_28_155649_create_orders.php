<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerShipment', function (Blueprint $table) {
        $table->increments('shipmentID');
        $table->integer('id')->unsigned();
        $table->integer('customerSubID')->unsigned();
        $table->date('shipmentDate');
        $table->timestamps();
    });    

       Schema::table('customerShipment', function($table) {
        $table->foreign('id')->references('id')->on('users');
        $table->foreign('customerSubID')->references('customerSubID')->on('customerSubscription');
    });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('customerShipment');
   }
}
