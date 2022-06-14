<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Pengarang;
use App\Models\Penerbit;
use App\Models\Rak;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        Buku::create([
            'isbn' => '21123',
            'judul' => 'doraemon',
            'cover' => 'pp.jpg',
            'stok' => '4',
            'idpengarang' => 1,
            'idpenerbit' => 1,
            'idkategori' => 1,
            'idrak' => 1, 
        ]);
        Pengarang::create([
            'nama' => 'marko',
            'email' => 'marko@gmail.com',
            'hp' => '98098',
            'foto' => 'jpg.jpg',
        ]);
        Penerbit::create([
            'nama' => 'marni',
            'alamat' => 'Jl.Lenteng',
            'email' => 'marni@gmail.com',
            'hp' => '98093128',
            'foto' => '1.jpg',
        ]);
        Rak::create([
            'nama' => '1',
        ]);
        Kategori::create([
            'nama' => 'Komik',
        ]);

    }


}
