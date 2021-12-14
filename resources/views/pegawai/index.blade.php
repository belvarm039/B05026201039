@extends('layout.ceria')

@section('title', 'DATA PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'Data Pegawai')

    <div class="container" align='center'>

	<h2>Data Pegawai</h2>
	<a href="/pegawai/tambah">
        <input class="btn-warning" type="button" value="Tambah Pegawai Baru">
    </a>

	<br/>
	<br/>

        <p>Cari Data Pegawai :</p>
        <form action="/pegawai/cari" method="GET">
            <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input class="btn-success" type="submit" value="CARI">
        </form>
    </div>

    <br/>
    <br/>

    <div class= "container" align='center'>
	<table border="2">
		<tr>
            <th>No</th>
			<th>Nama</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th> --}}
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
            <td>{{ $loop->iteration }}</td>
			<td>{{ $p->pegawai_nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> --}}
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-primary btn-sm" role="button">View Detail</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}"class="btn btn-danger btn-sm">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $pegawai->links() }}
    </div>
@endsection
