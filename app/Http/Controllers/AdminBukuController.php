<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukus = Buku::latest()->get();
        $kategoris = Kategori::latest()->get();       
        return view('admin.buku.index',compact('bukus'), compact('kategoris'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::latest()->get();       
        return view('admin.buku.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stok' => 'required',
            'deskripsi' => 'nullable',
            'halaman' => 'required',
            'harga' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
        ]);

        if($cover = $request->file('cover')) {
            $destinationPath = 'admin/vendors/images/';
            $profileImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
            $cover->move($destinationPath, $profileImage);
            $validated['cover'] = "$profileImage";
        }
    
        $buku = Buku::create($validated);

        if($buku) {
             return redirect()->route('buku.index')
                        ->with('success','Buku berhasil ditambahkan.');
        } else {
         return redirect()->route('buku.index')
                        ->with('error','Buku berhasil ditambahkan.');

        }
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function show(Buku $buku)
    {
        $buku = Buku::findOrFail($buku->id);
        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        //
        return view('admin.buku.edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $validated = $request->validate([
            'isbn' => 'required',
            'judul' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'stok' => 'required',
            'deskripsi' => 'required',
            'halaman' => 'required',
            'harga' => 'required',
            'pengarang_id' => 'required',
            'penerbit_id' => 'required',
            'kategori_id' => 'required',
            'rak_id' => 'required',
        ]);


        if($cover = $request->file('cover')) {
            if($request->oldCover) {
                $destinationPath = 'admin/vendors/images/';
                $profileImage = date('YmdHis') . "." . $cover->getClientOriginalExtension();
                $cover->move($destinationPath, $profileImage);
                $validated['cover'] = "$profileImage";
            } 

        } 


        $buku = Buku::where('id', $id)
            ->update($validated);

        if($buku) {
            return redirect('admin/buku')->with('update', 'Buku berhasil diupdate!');
        } else {
            return redirect('admin/buku')->with('error', 'Buku gagal diupdate!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buku  $buku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        //
        $buku->DELETE();
        return redirect()->route('buku.index')
                        ->with('delete','Product deleted successfully');
    }
}
