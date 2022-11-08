<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function dataUser()
    {
        return $this->hasOne(DataUser::class);
    }
    public function soals()
    {
        return $this->hasMany(Soal::class);
    }
}
