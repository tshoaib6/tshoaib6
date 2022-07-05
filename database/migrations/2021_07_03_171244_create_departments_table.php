<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id();
            $table->string('department')->nullable();
            $table->timestamps();
        });

        DB::table('departments')->insert([
            ['department' => 'Events'],
            ['department' => 'PR'],
            ['department' => 'Social Welfare'],
            ['department' => 'Street/Campus'],
            ['department' => 'UMatter'],
            ['department' => 'Courses'],
            ['department' => 'Halqas'],
            ['department' => 'Voluteers'],









            
            
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
}
