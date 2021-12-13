<!DOCTYPE html>
<html>
<head>
	<title>Data Modem</title>
</head>
<body>

	<h2>Data Modem</h2>

	<a href="/modem/tambah"> + Tambah Modem Baru</a>

	<br/>
	<br/>

	<table border="1">
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
				<a href="/modem/edit/{{ $p->kodemodem }}">Edit</a>
				|
				<a href="/modem/hapus/{{ $p->kodemodem }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
