<?php

namespace Database\Seeders;

use App\Models\Bibit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class BibitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Bibit::truncate();
        Schema::enableForeignKeyConstraints();

        Bibit::insert([
            'nama_bibit' => 'apel',
            'kota' => 'Bandung',
            'deskripsi' => Str::random(100),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
