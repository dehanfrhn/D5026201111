@extends('layout.happy')
@section('title','Absensi')
@section('judulhalaman', 'Absensi')

@section('konten')

    <h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Absen</h4>
    <a href="/absen" style="margin-left: 30px"> Kembali</a>
    <br>
    <form action="/absen/store" method="post" style="padding-left: 15px">
        {{ csrf_field() }}
        <div class="card-body card-block">
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Nama Pegawai</label></div>
                <div class="col-12 col-md-9">
                    <select class="form-control" name="IDPegawai">
                        @foreach($pegawai as $p )
                            <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="dtpickerdemo">Tanggal</label>
                </div>
                <div class="col-12 col-md-9 input-group date" id="dtpickerdemo" >
                    <input type='text'  class="form-control" name="tanggal" required="required">
                    <span class="input-group-addon">
                        <span class="fa fa-calendar-alt"></span>
                    </span>
                </div>
                <script type="text/javascript">
                    $(function () {
                        $('#dtpickerdemo').datetimepicker({format : "YYYY-MM-DD hh:mm", "defaultDate":new Date() });
                    });
                </script>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Status</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="radio" id="h" name="status" value="H">
                    <label for="h">HADIR</label><br>
                    <input type="radio" id="a" name="status" value="A">
                    <label for="a">TIDAK HADIR</label><br>
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>

        </div>


@endsection

