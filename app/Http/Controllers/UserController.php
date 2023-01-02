<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userView() {
        return view('index');
    }

    // public function adminView() {
    //     return view('index');
    // }

    public function loginView() {
        return view('login');
    }

    public function registerView() {
        return view('registrasi');
    }

    public function showNews() {
        return view('news');
    }

    public function showNewsDetail() {
        return view('news-detail');
    }


}
