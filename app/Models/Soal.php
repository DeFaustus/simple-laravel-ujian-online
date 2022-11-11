<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['mapel', 'dataUser', 'dataSoals', 'kelas'];
    public function dataSoals()
    {
        return $this->hasMany(DataSoal::class);
    }
    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function dataUser()
    {
        return $this->belongsTo(DataUser::class);
    }
    public function nilai()
    {
        return $this->hasOne(Nilai::class);
    }
}
