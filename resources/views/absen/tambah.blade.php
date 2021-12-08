@extends('layout.happy')
@section('title','Absensi')
@section('judulhalaman', 'Absensi')

@section('konten')

    <h4 style="margin-left: 30px; padding-top: 10px">Tambah Data Absen</h4>

    <a href="/absen" style="margin-left: 30px"> Kembali</a>

    <br />
    <br />

    <form action="/absen/store" method="post">
        {{ csrf_field() }}
        <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="dtpickerdemo" class="col-sm-2 control-label">Tanggal :</label>
                        <div class='col-sm-4 input-group date' id='dtpickerdemo'>
                            <input type='text' class="form-control" name="tanggal" required="required" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
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
        </div>
        Status
        <input type="radio" id="h" name="status" value="H">
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" checked="checked">
        <label for="a">TIDAK HADIR</label><br>
        <input type="submit" value="Simpan Data">
    </form>

@endsection

