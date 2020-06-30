<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $id){
        return view('register');
    }

    public function register_post(Request $id){
        $namawal= $id['namawal'];
        $namakhir=$id['namakhir'];
        return view('welcome', ['namawal' => $namawal, 'namakhir' => $namakhir ]);
    }
}
