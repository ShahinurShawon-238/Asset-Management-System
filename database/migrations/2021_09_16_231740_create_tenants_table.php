<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('tenantName');
            $table->string('tenantEmail');
            $table->integer('tenantPhoneNumber');
            $table->string('tenantNID');
            $table->unsignedBigInteger('buildingId');
            $table->foreign('buildingId')->references('id')->on('buildings')->onDelete('cascade');
            $table->unsignedBigInteger('floorId');
            $table->foreign('floorId')->references('id')->on('floors')->onDelete('cascade');
            $table->unsignedBigInteger('shopId');
            $table->foreign('shopId')->references('id')->on('shops')->onDelete('cascade');
            $table->unsignedBigInteger('rentId');
            $table->foreign('rentId')->references('id')->on('rents')->onDelete('cascade');
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
        Schema::dropIfExists('tenants');
    }
}
