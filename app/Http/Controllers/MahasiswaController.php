<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use Illuminate\Http\Request;
use App\dosen;
class MahasiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mhs = mahasiswa::with('dosen')->get();
        return view('mahasiswa.index',compact('mhs'));
    }

    public function create()
    {
        $dosen = dosen::all();
        return view('mahasiswa.create', compact('dosen'));
    }

    public function store(Request $request)
    {
        $mhs = new mahasiswa();
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->id_dosen = $request->id_dosen;
        $mhs->save();
        return redirect()->route('mahasiswa.index')->with(['massage'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $mhs = mahasiswa::findOrFail($id);
        return view('mahasiswa.show',compact('mhs'));
    }

    public function edit($id)
    {
        $dosen = dosen::all();
        $mhs = mahasiswa::findOrFail($id);
        return view('mahasiswa.edit',compact('mhs','dosen'));
    }

    public function update(Request $request, $id)
    {
        $mhs = mahasiswa::findOrFail($id);
        $mhs->nama = $request->nama;
        $mhs->nim = $request->nim;
        $mhs->id_dosen = $request->id_dosen;
        $mhs->save();
        return redirect()->route('mahasiswa.index')->with(['massage'=>'Data Berhasil Dibuat']);
    }

    public function destroy($id)
    {
        $mhs = mahasiswa::findOrFail($id)->delete();
        return redirect()->route('mahasiswa.index')
        ->with(['massage'=>'Data Berhasil Di Hapus']);
    }
}
