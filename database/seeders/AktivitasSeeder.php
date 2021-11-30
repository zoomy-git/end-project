<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AktivitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($x = 1; $x <= 10; $x++){

            DB::table('aktivitas')->insert([
                'pukul' => Carbon::now(),
                'nama' => Str::random(10),
                'kategori' => Str::random(10),
            ]);
        }
    }
}
