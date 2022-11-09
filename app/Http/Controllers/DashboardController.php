<?php

namespace App\Http\Controllers;

use App\Models\Soal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view("dashboard.index", [
            'title'         => "Dashboard",
            'jumlahGuru'    => User::role("GURU")->count(),
            'jumlahSiswa'   => User::role("SISWA")->count(),
            'jumlahSoal'    => Auth::user()->dataUser->kelas_id == null ? Soal::pluck("id")->count() : Soal::where('kelas_id', Auth::user()->dataUser->kelas->id)->count()
        ]);
    }
}
