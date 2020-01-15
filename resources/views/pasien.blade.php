<!DOCTYPE html>
<html>
<head>
	<title>Data Pasien</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Pasien</h1>
	<p>Cari Data Pasien :</p>
	<form action="/pasien/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pasien .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/pasien/tambah"> + Tambah Pasien Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>No Kartu</th>
			<th>Tgl Daftar</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Agama</th>
			<th>Gol Darah</th>
			<th>Jenis Kelamin</th>
			<th>Kelas</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($pasien as $p)
		<tr>
			<td>{{ $p->nokartu }}</td>
			<td>{{ $p->tgl_daftar }}</td>
			<td>{{ $p->nama }}</td>
			<td>{{ $p->alamat }}</td>
			<td>{{ $p->tempat_lahir }}</td>
			<td>{{ $p->tgl_lahir }}</td>
			<td>{{ $p->agama }}</td>
			<td>{{ $p->goldar }}</td>
			<td>{{ $p->jenis_kelamin }}</td>
			<td>{{ $p->idkelas }}</td>
			
			<td>
				<a class="btn btn-warning btn-sm" href="/pasien/edit/{{ $p->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pasien/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>