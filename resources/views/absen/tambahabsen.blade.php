@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'TAMBAH ABSEN')

<body>

	<h3>ABSEN PEGAWAI</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
        Pegawai: <select id="idpegawai" name="idpegawai" required="required">
            @foreach($pegawai as $p)
                <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
            @endforeach
        </select><br>

        <label for="dtpickerdemo">Tanggal :</label>
            <div class='col-sm-4 input-group date ' id='dtpickerdemo'>
                <input type='text' class="form-control" name="tanggal" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            </div>
            <script type="text/javascript">
                $(function () {
                    $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                });
            </script>
            <br>


        Status:
        <input type="radio" id="hadir" name="status" value="H">
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak hadir" name="status" value="T" checked="checked">
        <label for="css">TIDAK HADIR</label><br>
		<input type="submit" value="Simpan Data">
	</form>

</body>
@endsection
