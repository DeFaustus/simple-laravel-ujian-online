<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataSoalPostRequest;
use App\Http\Requests\SoalPostRequest;
use App\Models\DataSoal;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoalController extends Controller
{
    function __construct()
    {
        $this->middleware(['role:ADMIN|GURU']);
    }
    public function index()
    {
        return view("dashboard.soal.soalIndex", [
            'title' => 'Soal',
            'data'  => Soal::all()
        ]);
    }
    public function tambahSoal()
    {
        return view("dashboard.soal.tambahsoal", [
            'title'     =>  'Tambah Soal',
            'mapel'     => Mapel::all(),
            'kelas'     => Kelas::all(),
        ]);
    }
    public function tambahSoalAction(SoalPostRequest $request)
    {
        $validated = $request->validated();
        $validated['data_user_id'] = Auth::user()->id;
        try {
            Soal::create($validated);
            return redirect("dashboard/soal")->with("sukses", "Berhasil Tambah Soal");
        } catch (\Throwable $e) {
            return redirect('dashboard/soal')->with("gagal", $e->getMessage());
        }
    }
    public function dataSoalShow(Soal $soal)
    {
        if (Auth::user()->roles->pluck('name')[0] != 'ADMIN') {
            if ($soal->id == null || Auth::user()->dataUser->id != $soal->data_user_id) {
                abort(404);
            }
        }
        return view("dashboard.soal.tambahDatasoal", [
            'title'     =>  'Tambah Data Soal',
            'soal_id'   => $soal->id
        ]);
    }
    public function tambahDataSoalAction(DataSoalPostRequest $request)
    {
        $validated = $request->validated();
        $validated['kunci'] = $validated[$validated['kunci']];
        try {
            DataSoal::create($validated);
            return redirect("/dashboard/soal/lihatsoal/" . request('soal_id'))->with("sukses", "Berhasil Tambah Soal");
        } catch (\Throwable $e) {
            return redirect('dashboard/soal')->with("gagal", $e->getMessage());
        }
    }
    public function lihatSoal($id)
    {
        return view("dashboard.soal.lihatsoal", [
            'title'     => 'Lihat Soal',
            'data'      => Soal::with(['dataSoals'])->where(['id' => $id])->paginate()
        ]);
    }
    public function hapusDataSoal(DataSoal $soal)
    {
        $id = $soal->soal_id;
        $soal->delete();
        return redirect("/dashboard/soal/lihatsoal/" . $id)->with("sukses", "Berhasil Hapus Soal");
    }
}
