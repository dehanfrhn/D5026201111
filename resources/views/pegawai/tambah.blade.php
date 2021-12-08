@extends('layout.happy')
@section('title','Pegawai')
@section('judulhalaman', 'Pegawai')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Pegawai</h4>

	<a href="/pegawai" style="margin-left: 30px"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
