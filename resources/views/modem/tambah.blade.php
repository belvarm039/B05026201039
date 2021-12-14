@extends('layout.ceria')

@section('title', 'DATA MODEM')

@section('isikonten')

@section('judulhalaman', 'Tambah Data Modem')

	<h2>Data Modem</h2>

	<a href="/modem"> Kembali</a>

	<br/>
	<br/>

	<form action="/modem/store" method="post" class="form-group">
		{{ csrf_field() }}
        Kode: <input type="number" name="kodemodem" required="required"> <br/>
		Merk: <input type="text" name="merkmodem" required="required"> <br/>
		Stock: <input type="number" name="stockmodem" required="required"> <br/>

        <label for="tersedia">Tersedia:</label><br/>
        <input type="radio" id="sedia" name="tersedia" value="S">
        <label for="sedia">Tersedia</label>
        <input type="radio" id="tidak" name="tersedia" value="T">
        <label for="tidak">Tidak tersedia</label><br>
        <input type="submit" value="Simpan Data">

	</form>
@endsection
