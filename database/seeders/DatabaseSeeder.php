<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kategori;
use App\Models\Level;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Level::create([
            'nm_level' => 'admin'
        ]);

        Level::create([
            'nm_level' => 'user'
        ]);
        Kategori::create([
            'nm_kategori' => 'kemeja'
        ]);

        Kategori::create([
            'nm_kategori' => 'shirt'
        ]);

        Kategori::create([
            'nm_kategori' => 'jaket'
        ]);

        Kategori::create([
            'nm_kategori' => 'vest'
        ]);



        User::create([
            'name'=>'salwa',
            'email'=>'sal@gmail.com',
            'levels_id'=> 1,
            'password'=>bcrypt('1234')
        ]);

        User::create([
            'name'=>'kyy',
            'email'=>'kyy@gmail.com',
            'levels_id'=> 2,
            'password'=>bcrypt('1234')
        ]);
        Produk::create([
            'nama'=>'shirt',
            'kategori' => 'shirt',
            'harga' => 55000,
            'stok' => 50,
            'kategoris_id'=>1,
            'gambar'=> ''
        ]);
        Produk::create([
            'nama'=>'vestjava',
            'kategori' => 'vest',
            'harga' => 55000,
            'stok' => 50,
            'kategoris_id'=>1,
            'deskripsi' => 'nyaman banget',
            'gambar'=> ''
        ]);

    }
}
