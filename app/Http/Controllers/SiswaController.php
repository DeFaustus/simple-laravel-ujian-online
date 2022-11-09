<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    function __construct()
    {
        $this->middleware(['role:SISWA']);
    }
    public function index()
    {
        // dd(Auth::user()->dataUser->kelas->id);
        return view("dashboard.siswa_role.daftarSoal", [
            'title' => 'Soal',
            'data'  => Soal::with(['mapel', 'dataUser', 'dataSoals', 'kelas'])->where('kelas_id', Auth::user()->dataUser->kelas->id)->get()
        ]);
    }
}
