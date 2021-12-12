@extends('layout.happy')
@section('title','Kaos')
@section('judulhalaman', 'Kaos')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Edit Data Kaos</h4>

	<a href="/kaos" style="margin-left: 30px"> Kembali</a>

	<br/>
    <div class="card-body card-block">
        @foreach($kaos as $k)
        <form style="padding-left: 15px" action="/kaos/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $k->kodekaos }}">
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Merk Kaos</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" name="merk" value="{{ $k->merkkaos }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Stok Kaos</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="stock" value="{{ $k->stockkaos }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Ketersediaan</label></div>
            <div class="col-12 col-md-9">
                <input type="radio" id="ada" name="tersedia" value="Y" @if($k->tersedia==='Y') checked="checked" @endif>
                <label for="ada">Tersedia</label><br>
                <input type="radio" id="tidak" name="tersedia" value="N" @if($k->tersedia==='N') checked="checked" @endif>
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
        @endforeach
    </div>
    @endsection
