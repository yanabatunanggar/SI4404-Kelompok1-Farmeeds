<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function bibitView() {
        return view('pengajuan');
    }

    public function alatView() {
        return view('pengajuan');
    }

    public function tambahProdukView() {
        return view('admin/tambah');
    }

    public function simpanProduk(Request $request) {
        $data = $request->all();
        $img = Storage::disk('public')->put('/fotoProduk', $request->file('gambar'));
        
        // $validatedData = $request->validate([
        //     'nama_produk' => 'required',
        //     'kategori' => 'required',
        //     'stock' => 'required',
        //     'provinsi' => 'required',
        //     'kota' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        // $validatedData['gambar'] = $img;
        
        // dd($validatedData);
        Product::create([
            'nama_produk' => $data['nama_produk'],
            'kategori' => $data['kategori'],
            'stock' => $data['stock'],
            'provinsi' => $data['provinsi'],
            'kota' => $data['kota'],
            'deskripsi' => $data['deskripsi'],
            'gambar' => $img
        ]);

        return redirect('/tambahProduk')->with('addSuccess', 'Produk berhasil ditambahkan!');
    }

    public function hapusProduk(Request $request) {
        $id = $request->id;
        $product = Product::find($id);

        // Storage::disk('public')->delete($product->image);
        $product->delete();
        
        return redirect()->back()->with('deleteSuccess', 'Produk berhasil dihapus');
    }

    public function showBibit(Request $request) {        
        $bibits = Product::query();

        $bibits->when($request->kota, function($query) use ($request) {
            return $query->where('kota', '==' ,$request->kota);
        });

        return view('admin/bibit', [
            'bibits' => Product::where('kategori', 'bibit')->get(),
            'provinces' => Product::select('provinsi')->distinct()->get(),
            'cities' => Product::select('kota')->distinct()->get()
        ]);
    }

    public function editBibit(Request $request) {
        $id = $request->id;
        return view('admin/editBibit', [
            'product' => Product::find($id)
        ]);
    }

    // public function filterBibit(Request $request) {
    //     $bibits = Product::query();

    //     $bibits->when($request->kota, function($query) use ($request) {
    //         return $query->where('kota', '==' ,$request->kota);
    //     });
    // }

    public function showAlat() {
        return view('admin/alat', [
            'alats' => Product::where('kategori', 'alat')->get(),
            'provinces' => Product::select('provinsi')->where('kategori', 'alat')->distinct()->get(),
            'cities' => Product::select('kota')->where('kategori', 'alat')->distinct()->get()
        ]);
    }

    public function editAlat(Request $request) {
        $id = $request->id;
        return view('admin/editAlat', [
            'product' => Product::find($id)
        ]);
    }
}
