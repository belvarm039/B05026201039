@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'DETAIL DATA PEGAWAI')

	<h3>Detail Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
		Nama: <label>{{ $p->pegawai_nama }}</label>
        <br/>
		Jabatan: <label>{{ $p->pegawai_jabatan }}</label>
        <br/>
		Umur: <label>{{ $p->pegawai_umur }}</label>
        <br/>
		Alamat: <label>{{ $p->pegawai_alamat }}</label>
        <br/>

	@endforeach
@endsection
