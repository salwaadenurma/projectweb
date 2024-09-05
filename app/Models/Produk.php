<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $guarded=[];
    use HasFactory;

    public function produk(){
        return $this->belongsTo(Produk::class, 'Produk_id');
    }
    // public function kategori(){
    //     return $this->belongsTo(kategori::class, 'kategoris_id');
    // }
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_produk');
    }
}
