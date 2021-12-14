@extends('layout.ceria')

@section('title', 'DATA MODEM')

@section('isikonten')

@section('judulhalaman', 'Data Modem')

	<style type="text/css">
		.pagination li{
			float: justify;
			list-style-type: none;
		}
	</style>

    <div class="container" align='center'>

	<h2>Data Modem</h2>
	<br/>

    <p>Cari Data Modem :</p>
        <form action="/modem/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Modem .." value="{{ old('cari') }}">
            <input class="btn-success" type="submit" value="CARI">
        </form>

    <br/>
    <br/>

    <a href="/modem/tambah"> <button type="button" class="btn btn-primary">+ Tambah Data Baru</button></a>
    <br/>
    <br/>

	<table border="2">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($modem as $p)
		<tr>
			<td>{{ $p->kodemodem }}</td>
			<td>{{ $p->merkmodem }}</td>
			<td>{{ $p->stockmodem }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/modem/edit/{{ $p->kodemodem }}"><button type="button" class="btn btn-outline-info btn-sm">Edit</button></a>
				|
				<a href="/modem/hapus/{{ $p->kodemodem }}"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
	{{ $modem->links() }}
	</div>
@endsection
