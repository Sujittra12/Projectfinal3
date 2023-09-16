<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_time', function (Blueprint $table) {
            $table->time('Check_TimeIn');
            $table->time('Check_TimeOut');
            $table->date('Check_Day');

            $table->char('employee_ID');
            $table->foreign('employee_ID')->references('employee_ID')->on('users');

            $table->char('StatusTime_ID',1);
            $table->foreign('StatusTime_ID')->references('StatusTime_ID')->on('status_time');

            $table->char('Date_status_ID',1);
            $table->foreign('Date_status_ID')->references('Date_status_ID')->on('date');
           
           
        $table->timestamps();
        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_times');
    }
};
