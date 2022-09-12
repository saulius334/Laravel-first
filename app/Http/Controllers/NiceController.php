<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiceController extends Controller
{
    public function Fun($duok, $kuku = 'keturi')
    {
        $tipomas = ['lolas', 'wowas', 'csgo', 'minecraft'];
        return view('kitkas.fun', ['kuku' => $kuku, 'tipomas' => $tipomas, 'duok' => $duok]);
    }
    public function showForm(Request $request) {
        // $ans = $request->session()->pull('ans', 'Matai mane jei nieko nera');
        $ans = $request->session()->get('ans', 'Matai mane jei nieko nera');

        return view('form', [
            'ans' => $ans
        ]);
    }
    public function doForm(Request $request) {
        $n1 = $request->number1;
        $n2 = $request->number2;

        $ans = $n1 + $n2;
        
        // $request->session()->put('ans', $ans);
        // $request->session()->flash('ans', $ans);
        return redirect()->route('show')->with('ans', $ans);
    }
}
