<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function home(){
        $data['produk'] = Produk::all();
        return view ('home', $data);
    }
    public function show (){
        $data['produk'] = Produk::all();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->name;
        return view('dashboard',$data);
    }
    // public function create(){
    //     $data ['produk'] = Produk::all();
    //     $data['pengguna'] = Auth::user()->name;
    //     return view('create',$data);
    // }

    public function create()
    {
        return view('create');
    }

    public function add(Request $request){
        // $validasi = $request->validate([
        //     'nama' => ['required','min:3'],
        //     'kategori' => 'required',
        //     'jumlah' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'gambar' => 'image'
        // ]);
        $filename = '';
        if ($request -> file('gambar')) {
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $request->file('gambar')->storeAs('gambar', $filename);
        }
        Produk::create([
            'nama'=> $request->nama,
            'kategori'=> $request->kategori,
            // 'kategoris_id'=>$request->kategoris_id,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
            'gambar'=> $filename
        ]);
        return redirect('dashboard');
    }
    public function delete(Request $request){
        $hapus = Produk::find($request->id);
        Storage::delete('gambar/'.$hapus->gambar);
        $hapus -> delete();
        return redirect('dashboard');
    }
    public function search(Request $request){
        $data['produk'] = Produk::where('nama','LIKE','%'.$request->cari.'%')
        ->orwhere('kategori','LIKE','%'.$request->cari.'%')
        ->orwhere('harga','LIKE','%'.$request->cari.'%')
        ->orwhere('stok','LIKE','%'.$request->cari.'%')->get();
        $data['total'] = $data['produk']->count();
        $data['pengguna'] = Auth::user()->nama;
        return view('dashboard',$data);
    }
    public function edit(Request $request){
        $data['produk'] = Produk::all();
        $data['produk'] = Produk::find($request->id);
        $data['pengguna'] = Auth::user()->nama;
        return view('edit',$data);
    }
    public function update(Request $request, $id){
        $data['produk'] = Produk::all();
        $data['pengguna'] = Auth::user()->nama;

        $validasi = $request->validate([
            'nama'=>['required','min:3'],
            'kategori'=>['required'],
            'harga'=>['required'],
            'stok'=>['required'],
            'gambar'=>'image'
        ]);
        $produk = Produk::where('id',$id)->first();
        if ($request->gambar) {
            Storage::delete('/gambar/'.$produk->gambar);

            $filename = '';
            if ($request->file('gambar')) {
                $ext = $request->file('gambar')->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $request->file('gambar', $filename)->storeAs('/gambar',$filename);
            }

            Produk::where('id',$id)->update([
                'nama'=> $request->nama,
                'kategori'=> $request->kategori,
                'harga'=> $request->harga,
                'stok'=> $request->stok,
                'gambar'=> $filename
            ]);
            return redirect('dashboard');
        }else {
            Produk::where('id',$id)->update([
                'nama'=> $request->nama,
                'kategori'=> $request->kategori,
                'harga'=> $request->harga,
                'stok'=> $request->stok,
            ]);
        }
        return redirect('dashboard');
    }

    public function detailproduk($id){
        $data['produk'] = Produk::where('id', $id)->first();
        return view('detailproduk', $data);
    }
    public function pesanan(){
        return view('pesanan');
    }

    public function keranjang(){
        return view('keranjang');
    }
    public function kategori(){
        return view('kategori-produk');
    }

}
