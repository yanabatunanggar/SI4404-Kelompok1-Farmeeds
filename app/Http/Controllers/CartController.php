<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartView() {
        return view('cart');
    }

    public function tambahCart(Request $request) {
        $data = $request->all();
        $product = Product::find($data['id']);
        
        Cart::create([
            'id_product' => $data['id'],
            'jumlah' => $data['jumlah']
        ]);

        $product->stock = $product->stock - $data['jumlah'];
        $product->save();

        return redirect()->back()->with('addCartSuccess', 'Produk Berhasil Ditambahkan Ke Keranjang!');
    }
}
