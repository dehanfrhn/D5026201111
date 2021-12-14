@extends('layout.happy')
@section('title','Pegawai')
@section('judulhalaman', 'Pegawai')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Pegawai</h4>

	<a href="/pegawai" style="margin-left: 30px"> Kembali</a>

	<br/>
	<br/>
    <div class="card-body card-block">
        <form style="padding-left: 15px" action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Nama</label></div>
            <div class="col-12 col-md-9"><input type="text" name="nama" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Jabatan</label></div>
            <div class="col-12 col-md-9"><input type="text" name="jabatan" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Umur</label></div>
            <div class="col-12 col-md-9"><input type="number" name="umur" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Alamat</label></div>
            <div class="col-12 col-md-9"><textarea name="alamat" required="required" class="form-control"></textarea></div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        </form>
    </div>
@endsection
