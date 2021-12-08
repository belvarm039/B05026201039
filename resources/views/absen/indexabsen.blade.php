<!DOCTYPE html>
<html>
<head>
	<title>Data Absen Pegawai</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container" align='center'>
	<h2>Data Absen</h2>

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
			<td>{{ $p->absen_idpegawai }}</td>
			<td>{{ $p->absen_tanggal }}</td>
			<td>{{ $p->absen_status }}</td>
			<td>
				<a href="/absen/edit/{{ $p->absen_id }}">Edit</a>
				|
				<a href="/absen/hapus/{{ $p->absen_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $absen->links() }}
    </div>


</body>
</html>
