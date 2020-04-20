<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('employees', function (Blueprint $table) {
        $table->integer('employeeID')->unsigned();
        $table->integer('jobID')->unsigned();
        $table->integer('employeeWorkHours');
        $table->boolean('isAdmin')->default(false);
        $table->rememberToken();    
        $table->timestamps();
    });    

      Schema::table('employees', function($table) {
        $table->foreign('employeeID')->references('id')->on('users');
        $table->foreign('jobID')->references('jobID')->on('jobs');
    });
  }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
