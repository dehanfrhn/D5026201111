@extends('layout.happy')
@section('title', 'Absensi')
@section('judulhalaman', 'Absensi')
@section('lokasi','/absen/cari')
@section('caridata','absensi')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Data Absensi</h4>
	<a href="/absen/tambah" style="margin-left: 30px"> + Tambah Absen Baru</a>

	<br/>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>
        @foreach($absen as $a)
		<tr>
			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID}}">Edit</a>
				|
				<a href="/absen/hapus/{{ $a->ID}}">Hapus</a>
			</td>
		</tr>
		@endforeach
        </tbody>
        </table>
        <a style="margin-left: 12px ; ">Halaman : {{ $absen->currentPage() }}</a> <br/>
	    <a style="margin-left: 12px ; ">Jumlah Data : {{ $absen->total() }}</a> <br/>
        <a style="margin-left: 12px ; ">Data Per Halaman : {{ $absen->perPage() }}</a> <br/>        <br>
        {{ $absen->links() }}
    </div>
    @endsection


