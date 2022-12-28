<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user')->required();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict');
            $table->unsignedBigInteger('id_bibit')->required();
            $table->foreign('id_bibit')->references('id')->on('bibits')->onDelete('restrict');
            $table->unsignedBigInteger('id_alat')->required();
            $table->foreign('id_alat')->references('id')->on('alat_tanis')->onDelete('restrict');
            $table->string('status')->default('Diterima')->required();
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
        Schema::dropIfExists('orders');
    }
};
