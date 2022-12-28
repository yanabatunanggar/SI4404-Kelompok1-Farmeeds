<?php

namespace App\Http\Controllers;
use \App\Models\Bibit;

use Illuminate\Http\Request;

class BibitController extends Controller
{
    public function index() {
        $bibits = Bibit::all();

        return view('Bibit', ['listBibit' => $bibits]);
    }
}
