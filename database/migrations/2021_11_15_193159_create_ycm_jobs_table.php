<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYcmJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ycm_jobs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ycm_id');
            // $table->foreign('ycm_id')->references('id');
            $table->string('Insitute')->nullable();
            $table->string('posistion')->nullable();
            $table->string('Join_date')->nullable();
            $table->string('End_date')->nullable();
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
        Schema::dropIfExists('ycm_jobs');
    }
}
