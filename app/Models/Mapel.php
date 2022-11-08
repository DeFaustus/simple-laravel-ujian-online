<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ["id"];
    public function soals()
    {
        return $this->hasMany(Soal::class);
    }
    public function dataUsers()
    {
        return $this->hasMany(DataUser::class);
    }
}
