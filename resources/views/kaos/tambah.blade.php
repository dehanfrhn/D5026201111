@extends('layout.happy')
@section('title','Kaos')
@section('judulhalaman', 'Kaos')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Kaos</h4>

	<a href="/kaos" style="margin-left: 30px"> Kembali</a>

	<br/>
    <div class="card-body card-block">
        <form style="padding-left: 15px" action="/kaos/store" method="post">
        {{ csrf_field() }}
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Merk Kaos</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" id="merk" name="merk" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Stok Kaos</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" id="stock" name="stock" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="tersedia" class=" form-control-label">Ketersediaan</label></div>
            <div class="col-12 col-md-9">
                <input type="radio" id="ada" name="tersedia" value="Y">
                <label for="ada">Tersedia</label><br>
                <input type="radio" id="tidak" name="tersedia" value="N">
                <label for="tidak">Tidak Tersedia</label><br>
            </div>
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
