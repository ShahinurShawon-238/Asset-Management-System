<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buildingId');
            $table->foreign('buildingId')->references('id')->on('buildings')->onDelete('cascade');
            $table->unsignedBigInteger('floorId');
            $table->foreign('floorId')->references('id')->on('floors')->onDelete('cascade');
            $table->unsignedBigInteger('shopId');
            $table->foreign('shopId')->references('id')->on('shops')->onDelete('cascade');
            $table->float('rent');
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
        Schema::dropIfExists('rents');
    }
}
