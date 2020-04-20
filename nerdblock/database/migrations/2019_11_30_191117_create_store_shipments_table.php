<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_shipments', function (Blueprint $table) {
            $table->increments('storeShipmentID');
            $table->integer('storeID')->unsigned();
            $table->integer('employeeId')->unsigned();
            $table->integer('itemID')->unsigned();
            $table->date('storeShipmentDate');
            $table->integer('qtyShipped');
            $table->timestamps();
        });

        Schema::table('store_shipments', function($table) {
        $table->foreign('employeeID')->references('id')->on('users');
        $table->foreign('storeID')->references('storeID')->on('stores');
        $table->foreign('itemID')->references('itemID')->on('items');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_shipments');
    }
}
