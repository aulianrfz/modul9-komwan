<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    public function show()
    {
        // Mengambil semua anggota dari database
        $anggotas = Anggota::all();
        
        // Mengirimkan data anggota ke tampilan
        return view('about', compact('anggotas'));
    }
}
