<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function barang()
    {
        return view('barang');
    }

    public function ruangan()
    {
        return view('ruangan');
    }
}
