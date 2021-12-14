@extends('layout.happy')
@section('title','Pendapatan')
@section('judulhalaman', 'Pendapatan')

@section('konten')
	<h4 style="margin-left: 30px; padding-top: 10px">Edit Data Pendapatan</h4>

	<a href="/pendapatan" style="margin-left: 30px"> Kembali</a>

	<br/>

    <div class="card-body card-block">
        @foreach($pendapatan as $p)
        <form style="padding-left: 15px" action="/pendapatan/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="ID" value="{{ $p->ID }}">
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Nama Pegawai</label></div>
            <div class="col-12 col-md-9">
                <select id="IDPegawai" name="Nama" required="required" class="form-control">
                    @foreach($pegawai as $peg)
                    <option value="{{ $peg->pegawai_id }}" @if ($peg->pegawai_id === $p->IDPegawai) selected="selected" @endif> {{ $peg->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Bulan</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="Bulan" value="{{ $p->Bulan }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Tahun</label></div>
            <div class="col-12 col-md-9"><input type="text" required="required" name="Tahun" value="{{ $p->Tahun }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Gaji</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="Gaji" value="{{ $p->Gaji }}" class="form-control"></div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Tunjangan</label></div>
            <div class="col-12 col-md-9"><input type="number" required="required" name="Tunjangan" value="{{ $p->Tunjangan }}" class="form-control"></div>
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
