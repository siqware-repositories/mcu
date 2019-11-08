<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('office_id');
            $table->bigInteger('user_id');
            $table->string('thumb');
            $table->longText('content');
            $table->boolean('status');
            $table->boolean('is_publish');
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
        Schema::dropIfExists('office_activities');
    }
}
