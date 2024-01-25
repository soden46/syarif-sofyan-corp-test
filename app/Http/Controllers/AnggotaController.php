<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'DESC')->paginate(10);
        return view('anggota.index', compact('anggota'));
    }

    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota.show', compact('anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $ValidatedData = $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'nohp' => ['required'],
            'alamat' => ['required']
        ]);

        Anggota::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);
        return redirect('anggota')->with('success', 'Data Anggota Sukses Ditambahkan');
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id)->first();
        return view('anggota.edit', compact('anggota'));
    }

    public function update(Request $request, $id)
    {
        $ValidatedData = $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'nohp' => ['required'],
            'alamat' => ['required']
        ]);

        Anggota::where('id', $id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
        ]);
        return redirect('anggota')->with('success', 'Data Anggota Sukses Diupdate');
    }

    public function destroy($id)
    {
        Anggota::find($id)->delete();
        return redirect()->back()->with('success', 'Data Anggota Sukses Dihapus');
    }
}
