<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;


class BukuController extends Controller
{
    
    public function index () {

        if (request('kategori')) {
            $kategori = Kategori::firstWhere('nama', request('kategori'));
        }

        
        $bukus = Buku::latest()->filter(request(['kategori']))->paginate(10)->withQueryString();

        $kategoris = Kategori::latest()->get();
        return view('landingpage.buku.index', compact('bukus'), compact('kategoris'));
    }
}
