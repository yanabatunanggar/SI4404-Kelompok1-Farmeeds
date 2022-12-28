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
        Schema::table('users', function (Blueprint $table) {
            $table->string('alamat')->required()->after('email');
            $table->string('kota')->required()->after('alamat');
            $table->string('kecamatan')->required()->after('kota');
            $table->string('kelurahan')->required()->after('kecamatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('alamat');
            $table->dropColumn('kota');
            $table->dropColumn('kecamatan');
            $table->dropColumn('kelurahan');
        });
    }
};
