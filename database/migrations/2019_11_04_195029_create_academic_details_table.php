<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('academic_id');
            $table->string('major');
            $table->longText('desc')->default('default text');
            $table->longText('course')->default('default text');
            $table->longText('schedule')->default('default text');
            $table->longText('teacher')->default('default text');
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
        Schema::dropIfExists('academic_details');
    }
}
