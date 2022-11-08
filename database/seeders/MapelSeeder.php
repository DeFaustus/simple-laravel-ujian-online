<?php

namespace Database\Seeders;

use App\Models\Mapel;
use Illuminate\Database\Seeder;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mapel::create([
            'mapel'     =>  'IPA'
        ]);
        Mapel::create([
            'mapel'     =>  'IPS'
        ]);
        Mapel::create([
            'mapel'     =>  'MTK'
        ]);
    }
}
