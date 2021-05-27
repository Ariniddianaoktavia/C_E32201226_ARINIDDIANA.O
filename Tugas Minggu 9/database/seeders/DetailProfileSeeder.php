<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //
         DB::table('detail_profile')->insert([
        'address' => 'Probolinggo',
        'nomor_tlp' => '085314172907',
        'ttl' => '2001-10-13',
        'foto' => 'picture.png',
    ]);
 }
}