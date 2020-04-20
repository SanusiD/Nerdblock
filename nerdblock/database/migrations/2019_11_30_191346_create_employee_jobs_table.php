<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_jobs', function (Blueprint $table) {
            $table->integer('employeeId')->unsigned();
            $table->integer('jobID')->unsigned();
            $table->double('workHours');
            $table->timestamps();
        });

        Schema::table('employee_jobs', function($table) {
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
        Schema::dropIfExists('employee_jobs');
    }
}
