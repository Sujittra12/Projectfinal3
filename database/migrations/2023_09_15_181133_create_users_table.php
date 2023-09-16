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
      
        Schema::create('users', function (Blueprint $table) {
            // $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();

            //$table->bigIncrements('employee_ID');
            $table->char('Employee_ID',6)-> primary()->comment('รหัสพนักงาน Emp001');
            $table->string('name',45)->comment('ที่อยู่')->nullable();
            $table->date('Birthday')->comment('วันเกิด')->nullable();
            $table->string('Address',100)->comment('ที่อยู๋')->nullable();
            $table->string('email',45)->nullable();
              $table->timestamp('email_verified_at')->nullable();
            $table->string('Tel_phone',10)->nullable();
            $table->string('password')->nullable();
            $table->date('startWork')->nullable();
            $table->char('ID_Card',13)->nullable();
           

            $table->char('status_ID',1)->nullable(); 
            $table->foreign('status_ID')->references('status_ID')->on('employee_status');

            $table->char('Position_ID',4)->nullable(); 
            $table->foreign('Position_ID')->references('Position_ID')->on('employee_position');

            $table->char('department_ID',4)->nullable(); 
            $table->foreign('department_ID')->references('department_ID')->on('employee_department');
            
            $table->char('WhoIs',1)->comment('คือใคร 0=admin,1=header,2=user')->nullable();
           
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
        Schema::dropIfExists('users');
    }
};
