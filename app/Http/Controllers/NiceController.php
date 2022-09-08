<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function Fun($duok, $kuku = 'Dramblys')
    {
        dump($kuku);
        return view('kitkas.fun', ['kuku' => $kuku]);
    }
}
