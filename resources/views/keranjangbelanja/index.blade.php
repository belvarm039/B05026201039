<!DOCTYPE html>
<html>
<head>
	<title>Data Belanja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" align='center'>

	<h2>Data Belanja</h2>

	<br/>
    <button type="button" class="btn btn-warning"><a href="/keranjangbelanja/tambah">+ Tambah Data Belanja Baru</a></button>
    <br/>
    <br/>

	<table border="1">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
            <th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
			<td>{{ $p->Harga }}</td>
            <td> </td>
			<td>
				<button type="button" class="btn btn-outline-info btn-sm"><a href="/keranjangbelanja/tambah">Beli</a></button>
				|
				<button type="button" class="btn btn-outline-danger btn-sm"><a href="/keranjangbelanja/hapus/{{ $p->ID }}">Batal</a></button>
			</td>
		</tr>
		@endforeach
	</table>
</div>

</body>
</html>
