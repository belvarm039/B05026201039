<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
        // mengambil data dari table absen
        // $absen = DB::table('absen')->get();
        $absen = DB::table('absen')
        ->join('pegawai', 'absen.idpegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(3);


        // mengirim data absen ke view index
        return view('absen.index', ['absen' => $absen]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('absen.tambah', ['pegawai' => $pegawai]);
    }

    // method untuk insert data ke table absen
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('absen')->insert([
            'idpegawai' => $request->idpegawai,
            'tanggal' => $request->tanggal,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('id', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $judul = "Haloo Apa Kabar" ;
        // passing data absen yang didapat ke view editabsen.blade.php
        return view('absen.edit', ['absen' => $absen,'pegawai' => $pegawai,'judul' => $judul]);
    }

    // update data absen
    public function update(Request $request)
    {
        // update data absen
        DB::table('absen')->where('id', $request->id)->update([
            // update data pegawai
            'idpegawai' => $request->idpegawai,
            'tanggal' => $request->tanggal,
            'status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk hapus data absen
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absen')->where('id', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table absen sesuai pencarian data
        $pegawai = DB::table('pegawai')
            ->where('pegawai_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data absen ke view index
        return view('pegawai.index', ['pegawai' => $pegawai]);
    }
}
