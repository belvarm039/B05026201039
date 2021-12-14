@extends('layout.ceria')

@section('title', 'DATA MODEM')

@section('isikonten')

@section('judulhalaman', 'Edit Data Modem')

	<h2>Edit Modem</h2>

	<button type="button" class="btn btn-light"><a href="/modem"> Kembali</a></button>

	<br/>
	<br/>

	@foreach($modem as $p)
	<form action="/modem/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemodem" value="{{ $p->kodemodem }}"> <br/>
        Kode: <input type="number" name="kodemodem" required="required" value="{{ $p->kodemodem }}"> <br/>
		Merk: <input type="text" name="merkmodem" required="required" value="{{ $p->merkmodem }}"> <br/>
		Stock: <input type="number" name="stockmodem" required="required" value="{{ $p->stockmodem }}"> <br/>

        <label for="tersedia" value="{{ $p->tersedia }}">Tersedia:</label><br/>
        <input type="radio" id="sedia" name="tersedia" value="S">
        <label for="sedia">Tersedia</label>
        <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
        <label for="tidak">Tidak tersedia</label><br>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
