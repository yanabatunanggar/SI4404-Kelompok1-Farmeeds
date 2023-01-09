<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartView() {
        $id_user = auth()->user()->id;
        $carts = Cart::where('user_id', $id_user)->get();

        $products = Cart::where('user_id', $id_user)->with('products')->get();

        return view('cart', compact('carts', 'products'));
    }

    public function tambahCart(Request $request) {
        $data = $request->all();
        $product = Product::find($data['id']);
        $id_user = auth()->user()->id;
        $user = Cart::where('user_id', $id_user)->where('id_product',$product->id)->first();
        if($user){
            $user->jumlah += $data['jumlah'];
            $user->save();
            return redirect()->back()->with('addCartSuccess', 'Produk Berhasil Ditambahkan Ke Keranjang!');
        }
        
        Cart::create([
            'id_product' => $data['id'],
            'jumlah' => $data['jumlah'],
            'user_id' => $id_user
        ]);

        $product->stock = $product->stock - $data['jumlah'];
        $product->save();

        return redirect()->back()->with('addCartSuccess', 'Produk Berhasil Ditambahkan Ke Keranjang!');
    }

    public function updateCart(Request $request) {
        $data = $request->all();
        $cart = Cart::find($data['id']);
        
        // $cart->jumlah = $data['jumlah'];
        $jumlah = $data['jumlah'];
        
        $product = Product::find($data['id_produk']);
        $stock = $product->stock;
        // $akhir = $awal - $data['jumlah'];
        // $product->stock = $akhir;

        dd(($stock - $jumlah) + 2);
        // dd(($product->stock + $data['jumlah']) - $data['jumlah']);
        // $product->stock = (($product->stock + $data['jumlah']) - $data['jumlah']);
        // $product->save();
        
        // $cart->save();

        return redirect()->back()->with('updateCartSuccess', 'Jumlah Berhasil Diubah!');
    }

    public function deleteCart($id) {
        $cart = Cart::find($id);
        $jumlah = $cart->jumlah;
        
        $cart->products['stock'] += $jumlah;

        $cart->products->save();
        $cart->delete();

        return redirect()->back()->with('deleteSuccess', 'Keranjang berhasil dihapus');
    }
}
