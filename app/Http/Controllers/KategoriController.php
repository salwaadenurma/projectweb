<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //

    public function tampil(){
        $data['kategori'] = Kategori::all();
        return view('kategori', $data);
    }
    public function create(){
        return view('create');
    }
    public function add(Request $request){
        Kategori::create([
            'nm_kategori'=> $request->nm_kategori,
        ]);
        return redirect('kategori');
    }
    public function delete(Request $request){
        $hapus = Kategori::find($request->id);
        return redirect('kategori');
    }
}

