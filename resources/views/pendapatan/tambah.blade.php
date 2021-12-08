@extends('layout.happy')
@section('title','Pendapatan')
@section('judulhalaman', 'Pendapatan')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Pendapatan</h4>

	<a href="/pendapatan" style="margin-left: 30px"> Kembali</a>

	<br/>
	<br/>

	<form action="/pendapatan/store" method="post">
		{{ csrf_field() }}
		ID Pegawai <input type="number" name="IDPegawai" required="required"> <br/>
		Bulan <input type="number" name="Bulan" required="required"> <br/>
		Tahun <input type="text" name="Tahun" required="required"> <br/>
        Gaji <input type="number" name="Gaji" required="required"> <br/>
        Tunjangan <input type="number" name="Tunjangan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
@endsection
