<?php

namespace Database\Seeders;

use App\Models\Soal;
use Illuminate\Database\Seeder;

class SoalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Soal::create([
            'mapel_id'      =>  1,
            'kelas_id'      => 1,
            'data_user_id'  => 2,
            'nama'          => 'UTS IPA',
            'waktu'         => '01:00:00'
        ]);
    }
}
