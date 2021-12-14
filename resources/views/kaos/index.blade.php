@extends('layout.happy')
@section('title', 'Kaos')
@section('judulhalaman', 'Kaos')
@section('lokasi','/kaos/cari')
@section('caridata','kaos')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Data Kaos</h4>
	<a href="/kaos/tambah" style="margin-left: 30px"> + Tambah Kaos Baru</a>

	<br/>
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Merk</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>
        @foreach($kaos as $k)
		<tr>
			<td>{{ $k->merkkaos }}</td>
			<td>
                <a href="/kaos/detail/{{ $k->kodekaos }}">Detail</a>
                |
				<a href="/kaos/edit/{{ $k->kodekaos}}">Edit</a>
				|
				<a href="/kaos/hapus/{{ $k->kodekaos}}">Hapus</a>
			</td>
		</tr>
		@endforeach
        </tbody>
        </table>
        <a style="margin-left: 12px ; ">Halaman : {{ $kaos->currentPage() }}</a> <br/>
	    <a style="margin-left: 12px ; ">Jumlah Data : {{ $kaos->total() }}</a> <br/>
	    <a style="margin-left: 12px ; ">Data Per Halaman : {{ $kaos->perPage() }}</a> <br/>
        <br>
        {{ $kaos->links() }}
    </div>
    @endsection
