<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Absen</h3>

	<a href="/absen/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $p)
		<tr>
			<td>{{ $p->absen_id }}</td>
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


</body>
</html>
