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

	<h3>Tambah Data Belanja</h3>
    <br/>

	<button type="button" class="btn btn-outline-dark"><a href="/keranjangbelanja"> Kembali</a></button>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
        Kode Pembelian:<input type="text" name="id" required="required"> <br/>
		Kode Barang: <input type="text" name="kodebarang" required="required"> <br/>
		Jumlah Pembelian: <input type="text" name="jumlah" required="required"> <br/>
		Harga per item: <input type="text" name="harga" required="required"> <br/>
        Total: <input type="text" name="total" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</div>
</body>
</html>
