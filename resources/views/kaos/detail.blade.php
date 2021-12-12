@extends('layout.happy')
@section('title', 'Kaos')
@section('judulhalaman', 'Kaos')

@section('konten')
	<h4 style="margin-left: 30px ; padding-top: 10px">Detail Kaos</h4>
	<a href="/kaos/tambah" style="margin-left: 30px"> + Tambah Kaos Baru</a>

	<br/>
    @foreach($kaos as $k)
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Merk Kaos</th>
              <th scope="col">Stock Kaos</th>
              <th scope="col">Tersedia (Y/N)</th>
              <th scope="col">Opsi</th>
          </tr>
      </thead>
      <tbody>

		<tr>
			<td><input value="{{ $k->merkkaos }}" readonly type="text" id="merk" required="required" name="merk" class="form-control"></td>
			<td><input value="{{ $k->stockkaos }}" readonly type="text" id="stock" required="required" name="stock" class="form-control"></td>
            <td><input value="{{ $k->tersedia }}" readonly type="text" id="tersedia" required="required" name="tersedia" class="form-control"></td>
			<td>
				<a href="/kaos/edit/{{ $k->kodekaos}}">Edit</a>
				|
				<a href="/kaos/hapus/{{ $k->kodekaos}}">Hapus</a>
			</td>
		</tr>
        <a href="/kaos" class="btn btn-primary"> Kembali</a>
		@endforeach
        </tbody>
        </table>
    </div>
    @endsection
