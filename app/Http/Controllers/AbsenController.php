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
        ->join('pegawai', 'absen.absen_idpegawai', '=', 'pegawai.pegawai_id')
        ->select('absen.*', 'pegawai.pegawai_nama')
        ->paginate(3);


        // mengirim data absen ke view index
        return view('absen.indexabsen', ['absen' => $absen]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {

        // memanggil view tambah
        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        return view('absen.tambahabsen', ['pegawai' => $pegawai]);
    }

    // method untuk insert data ke table absen
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('absen')->insert([
            'absen_idpegawai' => $request->idpegawai,
            'absen_tanggal' => $request->tanggal,
            'absen_status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data absen berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('absen_id', $id)->get();

        $pegawai = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

        $judul = "Haloo Apa Kabar" ;
        // passing data absen yang didapat ke view editabsen.blade.php
        return view('absen.editabsen', ['absen' => $absen,'pegawai' => $pegawai,'judul' => $judul]);
    }

    // update data absen
    public function update(Request $request)
    {
        // update data absen
        DB::table('absen')->where('absen_id', $request->id)->update([
            // update data pegawai
            'absen_idpegawai' => $request->idpegawai,
            'absen_tanggal' => $request->tanggal,
            'absen_status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk hapus data absen
    public function hapus($id)
    {
        // menghapus data absen berdasarkan id yang dipilih
        DB::table('absen')->where('absen_id', $id)->delete();

        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }
}
