<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name')->nullable();
            $table->string('lname')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('cnic')->nullable();
            $table->string('status')->nullable();
            $table->string('country')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('whatsapp_no')->nullable();
            $table->string('avatar')->default('default.jpeg');
            $table->string('martial_status')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('employee_id')->nullable();
            $table->string('qualification')->nullable();
            $table->string('institute')->nullable();
            $table->string('designation')->nullable();
            $table->string('field_of_study')->nullable();
            $table->boolean('contracted')->nullable();
            $table->string('islamic_education')->nullable();








            $table->timestamps();
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
