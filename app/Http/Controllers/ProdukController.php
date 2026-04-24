<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index ()
    {
        return "ini adalah halaman produk";
    }

     public function view ()
    {
        return view ('view');
    }

    public function show ()
    {
        return "ini adalah halaman show produk";
    }


}
