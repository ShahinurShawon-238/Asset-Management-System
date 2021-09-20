<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buildingId');
            $table->foreign('buildingId')->references('id')->on('buildings')->onDelete('cascade');
            $table->unsignedBigInteger('floorId');
            $table->foreign('floorId')->references('id')->on('floors')->onDelete('cascade');
            $table->string('shopNumber');
            $table->float('shopHeight');
            $table->float('shopWidth');
            $table->boolean('status');
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
        Schema::dropIfExists('shops');
    }
}
