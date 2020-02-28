<?php

namespace App\Http\Controllers;

use App\wali;
use Illuminate\Http\Request;
use App\mahasiswa;
class WaliController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $wali = wali::with('mahasiswa')->get();
        return view('wali.index',compact('wali'));
    }

    public function create()
    {
        $mhs = mahasiswa::all();
        return view('wali.create', compact('mhs'));
    }

    public function store(Request $request)
    {
        $wali = new wali();
        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['massage'=>'Data Berhasil Dibuat']);
    }

    public function show($id)
    {
        $wali = wali::findOrFail($id);
        return view('wali.show',compact('wali'));
    }

    public function edit($id)
    {
        $mhs = mahasiswa::all();
        $wali = wali::findOrFail($id);
        return view('wali.edit',compact('wali','mhs'));
    }

    public function update(Request $request, $id)
    {
        $wali = wali::findOrFail($id);
        $wali->nama = $request->nama;
        $wali->id_mahasiswa = $request->id_mahasiswa;
        $wali->save();
        return redirect()->route('wali.index')->with(['massage'=>'Data Berhasil Diubah']);
    }

    public function destroy($id)
    {
        $wali = wali::findOrFail($id)->delete();
        return redirect()->route('wali.index')
        ->with(['massage'=>'Data Berhasil Di Hapus']);
    }
}
