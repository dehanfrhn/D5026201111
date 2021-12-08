
@extends('layout.happy')
@section('title', 'Absensi')
@section('judulhalaman', 'Absensi')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Data Absensi</h4>
	<a href="/absen/tambah" style="margin-left: 30px"> + Tambah Absen Baru</a>

	<br/>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID Pegawai</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>
        @foreach($absen as $a)
		<tr>
			<td>{{ $a->IDPegawai }}</td>
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
    </div>
    @endsection


