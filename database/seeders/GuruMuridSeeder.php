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

        $siswaDani = User::create([
            'name'      =>  "Dani",
            'email'     => "dani@murid.com",
            'password'  => Hash::make(1234)
        ]);
        $siswaDani->dataUser()->create([
            'kelas_id'  => 1,
            'nik'       => "34423",
            'nama'      => "dani",
            'no_telp'      => "292034",
            'foto'      => "292034.jpg",
        ]);
        $siswaDani->assignRole("SISWA");

        $siswaRoni = User::create([
            'name'      =>  "Roni",
            'email'     => "roni@murid.com",
            'password'  => Hash::make(1234)
        ]);
        $siswaRoni->dataUser()->create([
            'kelas_id'  => 2,
            'nik'       => "34424",
            'nama'      => "roni",
            'no_telp'      => "292034",
            'foto'      => "292034.jpg",
        ]);
        $siswaRoni->assignRole("SISWA");
    }
}
