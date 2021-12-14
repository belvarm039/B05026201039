@extends('layout.ceria')

@section('title', 'DATA ABSEN')

@section('isikonten')

@section('judulhalaman', 'Data Absen Pegawai')

    <div class="container" align='center'>
	<h2>Data Absen</h2>

    <p>Cari Data Modem :</p>
        <form action="/absen/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Data Absen .." value="{{ old('cari') }}">
            <input class="btn-success" type="submit" value="CARI">
        </form>

	<a href="/absen/tambah">
        <input class="btn-warning" type="button" value="Tambah Presensi Baru">
    </a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->idpegawai }}</td>
			<td>{{ $p->tanggal }}</td>
			<td>{{ $p->status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->id }}"><button type="button" class="btn btn-outline-info btn-sm">Edit</button></a>
				|
				<a href="/absen/hapus/{{ $p->id }}"><button type="button" class="btn btn-outline-danger btn-sm">Hapus</button></a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
    </div>
@endsection
