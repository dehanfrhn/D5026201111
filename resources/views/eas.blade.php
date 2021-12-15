@extends('layout.happy')
@section('judulhalaman','Evaluasi Akhir Semester')
@section('lokasi','/eas/cari')

@section('konten')
<h4 style="margin-left: 30px ; padding-top: 10px">Total Pengunjung</h4>
<br>
<div class="card-body">
    <table class="table">
        <tr>
            <th scope="col">Anda pengunjung ke:</th>
            @foreach($pagecounter as $p)
            <th scope="col">{{ $p->Jumlah }}</th>
            @endforeach
      </tr>
    </table>
</div>
@endsection
