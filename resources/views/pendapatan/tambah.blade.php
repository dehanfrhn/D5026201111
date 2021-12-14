@extends('layout.happy')
@section('title','Pendapatan')
@section('judulhalaman', 'Pendapatan')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Pendapatan</h4>

	<a href="/pendapatan" style="margin-left: 30px"> Kembali</a>

	<br/>
	<br/>
    <div class="card-body card-block">
        <form style="padding-left: 15px" action="/pendapatan/store" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID">
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Nama Pegawai</label></div>
            <div class="col-12 col-md-9">
                <select id="IDPegawai" name="Nama" required="required" class="form-control">
                    @foreach($pegawai as $p)
                        <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Bulan</label></div>
            <div class="col-12 col-md-9"><input type="number" name="Bulan" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Tahun</label></div>
            <div class="col-12 col-md-9"><input type="text" name="Tahun" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Gaji</label></div>
            <div class="col-12 col-md-9"><input type="number" name="Gaji" required="required" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class="form-control-label">Tunjangan</label></div>
            <div class="col-12 col-md-9"><input type="number" name="Tunjangan" required="required" class="form-control"></div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm" value="Simpan Data">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
        </form>
    </div>
@endsection
