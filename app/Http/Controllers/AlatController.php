<?php

namespace App\Http\Controllers;
use \App\Models\Alat;

use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index() {
        $alats = Alat::with('order')->get();

        return view('Alat', ['listAlat' => $alats]);
    }
}
