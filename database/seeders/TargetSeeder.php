<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TargetSeeder extends Seeder
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

            DB::table('targets')->insert([
                'nama' => Str::random(10),
                'tanggal' => Carbon::now(),
                'kategori' => Str::random(10),
            ]);
        }

    }
}
