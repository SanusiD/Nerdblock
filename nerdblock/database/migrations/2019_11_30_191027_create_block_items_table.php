<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_items', function (Blueprint $table) {
            $table->integer('blockID')->unsigned();
            $table->integer('itemID')->unsigned();
            $table->timestamps();
        });

        Schema::table('block_items', function($table) {
        $table->foreign('blockID')->references('blockID')->on('blocks');
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
        Schema::dropIfExists('block_items');
    }
}
