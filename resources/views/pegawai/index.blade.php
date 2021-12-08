@extends('layout.happy')
@section('title','Pegawai')
@section('judulhalaman', 'Pegawai')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Data Pegawai</h4>
	<a href="/pegawai/tambah" style="margin-left: 30px"> + Tambah Pegawai Baru</a>

<div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Umur</th>
          <th scope="col">Alamat</th>
          <th scope="col">Opsi</th>
      </tr>
  </thead>
  <tbody>
    @foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
    </tbody>
    </table>
</div>
@endsection
