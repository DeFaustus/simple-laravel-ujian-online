<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
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
            'data'  => Soal::where('kelas_id', Auth::user()->dataUser->kelas->id)->get()
        ]);
    }
    public function kerjakanSoal(Soal $soal)
    {
        // return $soal;
        if ($soal == null) {
            abort(404);
        }
        return view('dashboard.siswa_role.kerjakanSoal', [
            'title'     =>  $soal->nama,
            'soal'      => $soal,
            'jumlah'    => count($soal->dataSoals)
        ]);
    }
    public function jawab(Request $request)
    {
        try {
            Jawaban::updateOrCreate([
                'data_soal_id'  =>  $request->iDdataSoal,
            ], [
                'data_soal_id'  => $request->iDdataSoal,
                'jawaban'       =>  $request->value
            ]);
            return response()->json([
                'status' => true,
                'data' => $request->all()
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
