@extends('layout.happy')
@section('title','Pegawai')
@section('judulhalaman', 'Pegawai')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Edit Data Pegawai</h4>

	<a href="/pegawai" style="margin-left: 30px"> Kembali</a>

	<br/>
    <div class="card-body card-block">
        @foreach($pegawai as $p)
        <form style="padding-left: 15px" action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Nama</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Jabatan</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Umur</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Alamat</label></div>
            <div class="col-12 col-md-9"><textarea style="width: 100%" name="alamat" required="required">{{ $p->pegawai_alamat }}</textarea></div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        </form>
        @endforeach
    </div>
    @endsection
