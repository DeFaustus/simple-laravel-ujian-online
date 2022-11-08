<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSoal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
    public function jawaban()
    {
        return $this->hasOne(Jawaban::class);
    }
}
