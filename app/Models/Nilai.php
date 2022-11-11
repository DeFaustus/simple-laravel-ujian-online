<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
    public function dataUser()
    {
        return $this->belongsTo(DataUser::class);
    }
}
