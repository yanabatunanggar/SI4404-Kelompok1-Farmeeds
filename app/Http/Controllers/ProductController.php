<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function pengajuanView() {
        return view('pengajuan');
    }

    public function bibitView(Request $request) {
        if(isset($request->kota)) {
            $provinces = Province::all();
           $bibits = Product::where('kota', $request->kota)->get(); 
           return view('ajukanBibit', compact('provinces', 'bibits'));
        };

        $provinces = Province::all();
        $bibits = Product::where('kategori', 'bibit')->get();
        
        return view('ajukanBibit', compact('provinces', 'bibits'));
    }

    public function alatView(Request $request) {
        if(isset($request->kota)) {
           $provinces = Province::all();
           $alats = Product::where('kota', $request->kota)->get(); 
           return view('ajukanAlat', compact('provinces', 'alats'));
        };

        $provinces = Province::all();
        $alats = Product::where('kategori', 'alat')->get();
        
        return view('ajukanAlat', compact('provinces', 'alats'));
    }

    public function tambahProdukView() {
        $provinces = Province::all();
        return view('admin/tambah', compact('provinces'));
        // return view('admin/tambah', compact('provinces'));
    }

    public function simpanProduk(Request $request) {
        $data = $request->all();
        $img = Storage::disk('public')->put('/fotoProduk', $request->file('gambar'));

        Product::create([
            'nama_produk' => $data['nama_produk'],
            'kategori' => $data['kategori'],
            'stock' => $data['stock'],
            'provinsi' => $data['provinsi'],
            'kota' => $data['kota'],
            'deskripsi' => $data['deskripsi'],
            'gambar' => $img
        ]);

        return redirect('/admin/tambahProduk')->with('addSuccess', 'Produk berhasil ditambahkan!');
    }

    public function hapusProduk(Request $request) {
        $id = $request->id;
        $product = Product::find($id);

        // Storage::disk('public')->delete($product->image);
        $product->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Produk berhasil dihapus');
    }

    public function showBibit(Request $request) {   
        $bibits = Product::where('kategori', 'bibit')->get();
        $provinces = Province::all();

        return view('admin/bibit', compact('bibits', 'provinces'));
    }

    public function editBibit(Request $request, $id) {
        $product = Product::find($id);
        $provinces = Province::all();

        return view('admin/editproduk', compact('product', 'provinces'));
    }

    // public function editBibit($id) {
    //     $product = Product::find($id);
    //     // $provinces = Province::all();

    //     return view('admin2/editproduk', compact('product'));
    // }

    public function updateBibit(Request $request) {
        $id = $request->id;
        $data = $request->all();

        $bibit = Product::find($id);

        if (( $request->hasFile('gambar') )) {
            $img = Storage::disk('public')->put('/fotoProduk', $request->file('gambar'));
            $bibit->gambar = $img;
        }

        if ( ($request->filled('provinsi')) && ($request->filled('kota')) ) {
            $bibit->provinsi = $data['provinsi'];
            $bibit->kota = $data['kota'];
        }

        $bibit->nama_produk = $data['nama_produk'];
        $bibit->kategori = $data['kategori'];
        $bibit->stock = $data['stock'];
        $bibit->deskripsi = $data['deskripsi'];

        $bibit->save();

        return redirect('/admin/cekBibit')->with('editSuccess', 'Produk Berhasil Diubah');
    }

    public function showAlat() {
        $alats = Product::where('kategori', 'alat')->with(['provinces', 'regencies'])->get();
        $provinces = Province::all();

        return view('admin/alat', compact('alats', 'provinces'));
    }

    public function editAlat(Request $request, $id) {
        $product = Product::find($id);
        $provinces = Province::all();

        return view('admin/editAlat', compact('product', 'provinces'));
    }

    public function updateAlat(Request $request) {
        $id = $request->id;
        $data = $request->all();

        $alat = Product::find($id);

        if (( $request->hasFile('gambar') )) {
            $img = Storage::disk('public')->put('/fotoProduk', $request->file('gambar'));
            $alat->gambar = $img;
        }

        if ( ($request->filled('provinsi')) && ($request->filled('kota')) ) {
            $alat->provinsi = $data['provinsi'];
            $alat->kota = $data['kota'];
        }

        $alat->nama_produk = $data['nama_produk'];
        $alat->kategori = $data['kategori'];
        $alat->stock = $data['stock'];
        $alat->deskripsi = $data['deskripsi'];

        $alat->save();

        return redirect('/admin/cekAlat')->with('editSuccess', 'Produk Berhasil Diubah');
    }
}
