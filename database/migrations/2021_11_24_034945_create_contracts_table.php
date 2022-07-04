<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ycm_id')->nullable();
            // $table->foreign('ycm_id')->references('id')->on('employees');
            $table->string('subject');
            $table->string('name');
            $table->string('position');
            $table->integer('period')->unsigned();
            $table->string('started')->nullable();
            $table->string('until')->nullable();
            $table->string('probabtion_start');
            $table->string('probabtion_end');
            $table->integer('salary');
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
        Schema::dropIfExists('contracts');
    }
}
