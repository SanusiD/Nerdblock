<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('customer_subscriptions', function (Blueprint $table) {
        $table->increments('customerSubID');
        $table->integer('id')->unsigned();
        $table->integer('blockID')->unsigned();
        $table->date('customerOrderPurchaseDate');
        $table->string('customerOrderProgress');
        $table->timestamps();
    });    

     Schema::table('customer_subscriptions', function($table) {
        $table->foreign('id')->references('id')->on('users');
        $table->foreign('blockID')->references('blockID')->on('blocks');
    });
 }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_subscriptions');
    }
}
