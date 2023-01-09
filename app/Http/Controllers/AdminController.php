<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminView() {
        $orders = Order::all();

        return view('/admin/home', compact('orders'));
    }

    public function detailOrder($id) {
        $order = Order::find($id);
        $order_detail = OrderDetail::where('order_id', $order->id)->get();
        // dd($order_detail);
        return view('/admin/detailOrder', compact('order_detail', 'order'));
    }   

    public function ubahStatus(Request $request, $id) {

        $order = Order::where('id', $id)->first();

        $order->status = $request->status;
        $order->save();

        return redirect()->back()->with('updateSuccess', 'Status Berhasil Diubah');

    }
}
