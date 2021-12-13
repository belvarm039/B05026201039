<!DOCTYPE html>
<html>
<head>
	<title>Data Modem</title>
</head>
<body>

	<h2>Data Modem</h2>

	<a href="/modem"> Kembali</a>

	<br/>
	<br/>

	<form action="/modem/store" method="post">
		{{ csrf_field() }}
        Kode: <input type="number" name="kodemodem" required="required"> <br/>
		Merk: <input type="text" name="merkmodem" required="required"> <br/>
		Stock: <input type="number" name="stockmodem" required="required"> <br/>

        <label for="tersedia">Tersedia:</label><br/>
        <input type="radio" id="tersedia" name="tersedia" value="S">
        <label for="tersedia">Tersedia</label><br>
        <input type="radio" id="tidak_tersedia" name="tidak_tersedia" value="T">
        <label for="tidak_tersedia">Tidak Tersedia</label><br>
		<input type="submit" value="Simpan Data">

        {{-- <label for="kodemodem">Kode:</label>
        <input type="number" id="kodemodem" name="kodemodem" required="required"><br>

        <label for="merkmodem">Merk:</label>
        <input type="text" id="merkmodem" name="merkmodem" required="required"><br>

        <label for="stockmodem">Stock:</label>
        <input type="number" id="stockmodem" name="stockmodem" required="required"><br> --}}


	</form>

</body>
</html>
