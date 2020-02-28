<?php

namespace App\Http\Controllers;

use App\hobbi;
use Illuminate\Http\Request;

class HobbiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hobbi = hobbi::all();
        return view('hobbi.index',compact('hobbi'));
    }

    public function create()
    {
        return view('hobbi.create');
    }

    public function store(Request $request)
    {
        $hobbi = new hobbi();
        $hobbi->hobbi = $request->hobbi;
        $hobbi->save();
        return redirect()->route('hobbi.index')
        ->with(['massage'=>'Hobbi Berhasil Dibuat']);
    }

    public function show($id)
    {
        $hobbi = hobbi::findOrFail($id);
        return view('hobbi.show',compact('hobbi'));
    }

    public function edit($id)
    {
        $hobbi = hobbi::findOrFail($id);
        return view('hobbi.edit',compact('hobbi'));
    }

    public function update(Request $request, $id)
    {
        $hobbi = hobbi::findOrFail($id);
        $hobbi->hobbi = $request->hobbi;
        $hobbi->save();
        return redirect()->route('hobbi.index')
        ->with(['massage'=>'Hobbi Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $hobbi = hobbi::findOrFail($id)->delete();
        return redirect()->route('hobbi.index')
        ->with(['massage'=>'Hobbi Berhasil Di Hapus']);
    }
}
