<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //membuat hello world
    public function index ()
    { //membuat hello world
        $nama ="mpebb";
        $data = [
            'Hobi : berenang,makan,suka ml',
            'alamat : Wanaherang','siswa'
        ];
        //passing data
        return view('siswa',['nama'=>$nama,'data'=>$data]);
    }
}

