<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function show()
    {
        $anggotas = Anggota::all();
        
        return view('about', compact('anggotas'));
    }

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'nim' => 'required',
        'alamat' => 'required',
        'email' => 'required|email',
        'nomor_hp' => 'required',
        'pendidikan' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $gambarPath = $request->file('gambar')->store('anggota', 'public');

    Anggota::create([
        'nama' => $request->nama,
        'nim' => $request->nim,
        'alamat' => $request->alamat,
        'email' => $request->email,
        'nomor_hp' => $request->nomor_hp,
        'pendidikan' => $request->pendidikan,
        'gambar' => $gambarPath,
    ]);

    return redirect()->back()->with('success', 'Anggota berhasil ditambahkan!');
}


}
