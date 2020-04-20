<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('shipments', function (Blueprint $table) {
        $table->increments('shipmentID');
        $table->integer('id')->unsigned();
        $table->integer('customerSubID')->unsigned();
        $table->string('trackingID');
        $table->double('blockPrice');
        $table->date('shipmentDate');
        $table->timestamps();
    });    

      Schema::table('shipments', function($table) {
        $table->foreign('id')->references('id')->on('users');
        $table->foreign('customerSubID')->references('customerSubID')->on('customer_subscriptions');
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipments');
    }
}
