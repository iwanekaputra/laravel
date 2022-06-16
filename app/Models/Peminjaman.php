<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user() { 
        return $this->hasMany(User::class);
    }

    public function buku(){ 
        return $this->hasMany(Buku::class);
    }
}
