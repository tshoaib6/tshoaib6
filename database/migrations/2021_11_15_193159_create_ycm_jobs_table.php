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
            $table->string('Insitute');
            $table->string('posistion');
            $table->string('Join_date');
            $table->string('End_date');
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
