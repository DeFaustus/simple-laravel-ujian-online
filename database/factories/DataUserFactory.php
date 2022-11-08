<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DataUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "user_id"   => 1,
            "nik"       => "1231234",
            "nama"      => "ADMIN",
            "no_telp"   => "08333243",
            "foto"      => "img.jpeg"
        ];
    }
}
