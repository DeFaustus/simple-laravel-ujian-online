<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class GuruMuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = User::create([
            'name'      =>  "Slamet",
            'email'     => "slamet@guru.com",
            'password'  => Hash::make(1234)
        ]);
        $guru->dataUser()->create([
            'mapel_id'  => 1,
            'nik'       => "34423",
            'nama'      => "slamet",
            'no_telp'      => "292034",
            'foto'      => "292034.jpg",
        ]);
        $guru->assignRole("GURU");

        $siswa = User::create([
            'name'      =>  "Dani",
            'email'     => "dani@guru.com",
            'password'  => Hash::make(1234)
        ]);
        $siswa->dataUser()->create([
            'nik'       => "34423",
            'nama'      => "dani",
            'no_telp'      => "292034",
            'foto'      => "292034.jpg",
        ]);
        $siswa->assignRole("SISWA");
    }
}
