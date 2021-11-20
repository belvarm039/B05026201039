<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2pweb');
    }
    function showTugasPHP(Request $request)
    {
        return view('tugasphp');
    }

    function showForm()
    {
        return view('showfaktorial');
    }

    function showETS()
    {
        return view('etspweb');
    }

}
