<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function statusAdmin() {
        return view('admin/status');
    }

    public function orderView() {
        return view('order');
    }

    public function tambahPesanan(Request $request) {
        $data = $request->all();

        $user = User::find($data['id_user']);
        $carts = Cart::where('user_id',$user->id)->get();
        $order = Order::create([
            'user_id' => $user->id
        ]);
        if($order){
            foreach ($carts as $cart) {
                OrderDetail::create([
                    'product_id' => $cart->id_product,
                    'order_id' => $order->id,
                    'jumlah' => $cart->jumlah
                ]);
                $cart->delete();
            }
        }

        return redirect('/order')->with('addSuccess', 'Keranjang berhasil ditambahkan');
    }
}
