<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelas::insert(
            [
                ['kelas'    => '1A'],
                ['kelas'    => '1B'],
                ['kelas'    => '1C'],
                ['kelas'    => '1D'],
                ['kelas'    => '1E'],
                ['kelas'    => '1F'],
            ]
        );
    }
}
