@extends('layout.happy')
@section('title', 'Absensi')
@section('judulhalaman', 'Absensi')

@section('konten')

    <h4 style="margin-left: 30px; padding-top: 10px">Edit Data Absen</h4>
	<a href="/absen" style="margin-left: 30px"> Kembali</a>
    <br>
    <div class="card-body card-block">
        @foreach($absen as $a)
        <form style="padding-left: 15px" action="/absen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $a->ID }}">
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Nama Pegawai</label></div>
            <div class="col-12 col-md-9">
                <select class="form-control" name="idpegawai">
                    @foreach($pegawai as $p )
                        <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label for="dtpickerdemo" class="control-label">Tanggal</label></div>
            <div class="col-12 col-md-9 input-group date" id="dtpickerdemo" >
                <input type='text'  class="form-control datetimepicker-input" name="tanggal" required="required" data-target="#dtpickerdemo" data-toggle="datetimepicker" value="{{ $a->Tanggal }}">
                <span class="input-group-addon">
                    <span class="fa fa-calendar-alt"></span>
                </span>
            </div>
            <script type="text/javascript">
                $(function() {
                    $('#dtpickerdemo').datetimepicker({
                        format: "YYYY-MM-DD hh:mm:ss",
                        "defaultDate": new Date(),
                        locale : "id"
                    });
                });


            </script>
        </div>
        <div class="row form-group">
            <div class="col col-md-3"><label class=" form-control-label">Status</label></div>
            <div class="col-12 col-md-9">
                <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
                <label for="h">HADIR</label><br>
                <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
                <label for="a">TIDAK HADIR</label><br>
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
