<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ModemController extends Controller
{
    public function index()
    {
        // mengambil data dari table modem
        $modem = DB::table('modem')->get();

        // mengirim data modem ke view index
        return view('modem.index', ['modem' => $modem]);
    }

    // method untuk menampilkan view form tambah modem
    public function tambah()
    {

        // memanggil view tambah
        return view('modem.tambah');
    }

    // method untuk insert data ke table modem
    public function store(Request $request)
    {
        // insert data ke table modem
        DB::table('modem')->insert([
            'kodemodem' => $request->kodemodem,
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk edit data modem
    public function edit($id)
    {
        // mengambil data modem berdasarkan id yang dipilih
        $modem = DB::table('modem')->where('kodemodem', $id)->get();
        // passing data modem yang didapat ke view edit.blade.php
        return view('modem.edit', ['modem' => $modem]);
    }

    // update data modem
    public function update(Request $request)
    {
        // update data modem
        DB::table('modem')->where('kodemodem', $request->kodemodem)->update([
            'kodemodem' => $request->kodemodem,
            'merkmodem' => $request->merkmodem,
            'stockmodem' => $request->stockmodem,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman modem
        return redirect('/modem');
    }

    // method untuk hapus data pegawai
    public function hapus($kodemodem)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('modem')->where('kodemodem', $kodemodem)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/modem');
    }
}
