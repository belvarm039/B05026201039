@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

@section('judulhalaman', 'EDIT ABSEN')

<h3>EDIT ABSEN PEGAWAI</h3>

<a href="/absen"> Kembali</a>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        Pegawai: <select id="idpegawai" name="idpegawai" required="required">
            @foreach($pegawai as $peg)
                <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->idpegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
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
        <input type="radio" id="hadir" name="status" value="H" @if ($p->status === "H") checked="checked" @endif>
        <label for="hadir">HADIR</label>
        <input type="radio" id="tidak" name="status" value="T" @if ($p->status === "T") checked="checked" @endif>
        <label for="tidak">TIDAK HADIR</label><br>

        <input type="submit" value="Simpan Data">

	</form>
	@endforeach

@endsection
