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
            $table->string('Insitute');
            $table->string('posistion');
            $table->string('from_date');
            $table->string('to_date');
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
