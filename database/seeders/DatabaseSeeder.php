<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for($x = 1; $x <= 10; $x++){
            DB::table('aktivitas')->insert([
                'pukul' => Carbon::now(),
                'tanggal' => Carbon::now(),
                'nama' => Str::random(10),
                'kategori' => Str::random(10),
            ]);
            DB::table('materis')->insert([
                'link' => "https://www.youtube.com/embed/S0nAJjAqfpQ",
                'kategori' => "Pemrograman Web",
                'deskripsi' => "Apa itu method POST dan GET",
            ]);
            DB::table('targets')->insert([
                'nama' => Str::random(10),
                'tanggal' => Carbon::now(),
                'kategori' => Str::random(10),
            ]);

        }
    }
}
