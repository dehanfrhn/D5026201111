@extends('layout.happy')
@section('title', 'Absensi')
@section('judulhalaman', 'EDIT DATA')

@section('konten')

	<a href="/absen"> Kembali</a>

	<br/>
    <h3>{{ $status }}</h3>
	<br/>

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
         <div class="container">

            <div class="row">
                <div class='col-lg-9'>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai :</label>
                        <div class='col-sm-4 input-group date' id='nama'>
                            <select class="form-control" name="idpegawai">
                                @foreach($pegawai as $p )
                                    <option value="{{ $p->pegawai_id }}" @if($p->pegawai_id===$a->IDPegawai) selected="selected" @endif> {{ $p->pegawai_nama }}</option>
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
                            <input type='text' class="form-control" name="tanggal" required="required" value="{{ $a->Tanggal }}" />
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
        <input type="radio" id="h" name="status" value="H" @if($a->Status==='H') checked="checked" @endif>
        <label for="h">HADIR</label><br>
        <input type="radio" id="a" name="status" value="A" @if($a->Status==='A') checked="checked" @endif>
        <label for="a">TIDAK HADIR</label><br>


		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

    @endsection
