<?php

namespace App\Http\Controllers;

use App\dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dosen = dosen::all();
        return view('dosen.index',compact('dosen'));
    }

    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $dosen = new dosen();
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Dibuat']);
    }

    public function show($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.show',compact('dosen'));
    }

    public function edit($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.edit',compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $dosen = dosen::findOrFail($id);
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $dosen = dosen::findOrFail($id)->delete();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Di Hapus']);
    }
}
