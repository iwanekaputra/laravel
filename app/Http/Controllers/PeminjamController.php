<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Peminjaman;


class PeminjamController extends Controller
{
    public function index () {
        $peminjaman = Peminjaman::where('user_id', auth()->user()->id)->get();
    
        return view("siswa.index", compact('peminjaman'));
    }

    public function destroy($id) {
        Peminjaman::destroy($id);
        return redirect('/buku-dipinjam')->with('success', 'Anda membatalkan pinjaman');    
    }
}
