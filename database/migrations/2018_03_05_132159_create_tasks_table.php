<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('owner_id')->nullable(); //US8_AC1_AC2
            $table->unsignedInteger('lane_id')->nullable()->default(1); // US7_AC5
            $table->unsignedInteger('order_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('lane_id')->references('id')->on('lanes')->onDelete('set default');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
