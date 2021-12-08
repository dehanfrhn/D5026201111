@extends('layout.happy')
@section('title','Pendapatan')
@section('judulhalaman', 'Pendapatan')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Data Pendapatan</h4>
	<a href="/pendapatan/tambah" style="margin-left: 30px"> + Tambah Data Baru</a>

	<br/>

<div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID Pegawai</th>
          <th scope="col">Bulan</th>
          <th scope="col">Tahun</th>
          <th scope="col">Gaji</th>
          <th scope="col">Tunjangan</th>
          <th scope="col">Opsi</th>
      </tr>
  </thead>
  <tbody>
    @foreach($pendapatan as $p)
    <tr>
        <td>{{ $p->IDPegawai }}</td>
        <td>{{ $p->Bulan }}</td>
        <td>{{ $p->Tahun }}</td>
        <td>{{ $p->Gaji }}</td>
        <td>{{ $p->Tunjangan }}</td>
        <td>
            <a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
            |
            <a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
        </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
@endsection

