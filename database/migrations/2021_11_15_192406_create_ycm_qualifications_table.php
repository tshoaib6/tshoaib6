<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYcmQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ycm_qualifications', function (Blueprint $table) {
             $table->id();
            // $table->string('ycm_id');
            // $table->foreign('ycm_id')->references('rec_id')->on('Employees');
            // $table->string('Insitute');
            // $table->string('course');
            // $table->int('year',4);
            // $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ycm_qualifications');
    }
}
