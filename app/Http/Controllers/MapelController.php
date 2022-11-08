<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    function __construct()
    {
        $this->middleware(["role:ADMIN", "permission:can admin"]);
    }
    public function index()
    {
        return view("dashboard.mapel", [
            'title'     =>  'Mapel',
            'data'      => Mapel::all()
        ]);
    }
    public function tambah(Request $request)
    {
        $validate = $request->validate([
            'mapel'     =>  'required'
        ]);

        try {
            Mapel::create($validate);
            return redirect()->back()->with(['sukses'  =>  'Sukses Tambah Mapel']);
        } catch (\Throwable $e) {
            return redirect()->back()->with(['gagal'  =>  'Gagal Tambah Mapel']);
        }
    }
    public function update(Request $request)
    {
        $validate = $request->validate([
            'id'    => 'required',
            'mapel'    => 'required',
        ]);
        Mapel::where('id', $request->id)->update(['mapel' => $request->mapel]);
        return redirect()->back()->with(['sukses'  =>  'Sukses Update Mapel']);
    }
    public function hapus(Request $request)
    {
        Mapel::where('id', $request->id)->delete();
        return redirect()->back()->with(['sukses'  =>  'Sukses Hapus Mapel']);
    }
}
