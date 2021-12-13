<!DOCTYPE html>
<html>
<head>
	<title>Data Modem</title>
</head>
<body>

	<h2>Edit Modem</h2>

	<a href="/modem"> Kembali</a>

	<br/>
	<br/>

	@foreach($modem as $p)
	<form action="/modem/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodemodem" value="{{ $p->kodemodem }}"> <br/>
		Kode: <input type="number" name="kodemodem" required="required"> <br/>
		Merk: <input type="text" name="merkmodem" required="required"> <br/>
		Stock: <input type="number" name="stockmodem" required="required"> <br/>

        <label for="tersedia">Tersedia:</label><br/>
        <input type="radio" id="tersedia" name="tersedia" value="S">
        <label for="tersedia">Tersedia</label><br>
        <input type="radio" id="tidak_tersedia" name="tidak_tersedia" value="T">
        <label for="tidak_tersedia">Tidak Tersedia</label><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
