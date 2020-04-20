<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_orders', function (Blueprint $table) {
            $table->increments('orderID');
            $table->integer('itemID')->unsigned();
            $table->integer('qtyOrdered');
            $table->double('qtyCost');
            $table->date('orderPurchaseDate');
            $table->timestamps();
        });

         Schema::table('item_orders', function($table) {
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
        Schema::dropIfExists('item_orders');
    }
}
