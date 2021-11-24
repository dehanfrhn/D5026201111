<!DOCTYPE html>
<html>
<head>
	<title>CRUD Tabel Pendapatan</title>
</head>
<body>

	<h2>M Farhan Rahmandika</h2>
	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Data Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID Pegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
            <th>Tunjangan</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->IDPegawai }}</td>
			<td>{{ $p->Bulan }}</td>
			<td>{{ $p->Tahun }}</td>
            <td>{{ $p->Gaji }}</td>
            <td>{{ $p->Tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
