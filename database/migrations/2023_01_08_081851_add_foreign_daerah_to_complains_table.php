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
        Schema::table('complains', function (Blueprint $table) {
            $table->foreign('provinsi')
                ->references('id')
                ->on('provinces');
            $table->foreign('kota')
                ->references('id')
                ->on('regencies');
            $table->foreign('kecamatan')
                ->references('id')
                ->on('districts');
            $table->foreign('kelurahan')
                ->references('id')
                ->on('villages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('complains', function (Blueprint $table) {
            $table->dropForeign('provinsi');
            $table->dropForeign('kota');
            $table->dropForeign('kecamatan');
            $table->dropForeign('kelurahan');
        });
    }
};
