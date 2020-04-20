<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CustomerSubscription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('customerSubscription', function (Blueprint $table) {
        $table->increments('customerSubID');
        $table->integer('id')->unsigned();
        $table->integer('blockID')->unsigned();
        $table->date('customerOrderPurchaseDate');
        $table->string('customerOrderProgress');
        $table->timestamps();
    });    

     Schema::table('customerSubscription', function($table) {
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
        Schema::dropIfExists('customerSubscription');
    }
}
