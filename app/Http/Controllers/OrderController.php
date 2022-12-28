<?php

namespace App\Http\Controllers;
use \App\Models\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{   
    public function index() {
        $orders = Order::with('alat')->get();
    
        return view('Status', ['listOrder' => $orders]);
    }
}
