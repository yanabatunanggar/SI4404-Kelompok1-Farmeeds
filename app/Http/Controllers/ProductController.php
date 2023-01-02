<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function bibitView() {
        return view('pengajuan');
    }

    public function alatView() {
        return view('pengajuan');
    }
}
