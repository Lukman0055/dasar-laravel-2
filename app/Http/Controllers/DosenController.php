<?php

namespace App\Http\Controllers;

use App\dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = dosen::all();
        return view('dosen.index',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dosen = new dosen();
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.show',compact('dosen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dosen = dosen::findOrFail($id);
        return view('dosen.edit',compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dosen = dosen::findOrFail($id);
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Di Edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dosen  $dosen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosen = dosen::findOrFail($id);
        $dosen->nama = $request->nama;
        $dosen->nip = $request->nip;
        $dosen->save();
        return redirect()->route('dosen.index')
        ->with(['massage'=>'Dosen Berhasil Di Hapus']);
    }
}
