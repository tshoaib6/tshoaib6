<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDawahExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dawah_exps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ycm_id');
            //  $table->foreign('ycm_id')->references('id');
            $table->string('Insitute')->nullable();
            $table->string('posistion')->nullable();
            $table->string('from_date')->nullable();
            $table->string('to_date')->nullable();
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
        Schema::dropIfExists('dawah_exps');
    }
}
