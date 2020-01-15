<!DOCTYPE html>
<html>
<head>
	<title>Data Kelas</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Kelas</h1>
	<p>Cari Data Kelas :</p>
	<form action="/pasien/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Kelas .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/kelas/tambah"> + Tambah Kelas Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>ID Kelas</th>
			<th>Nama Kelas</th>
			<th>Jenis Kelas</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($kelas as $k)
		<tr>
			<td>{{ $k->idkelas }}</td>
			<td>{{ $k->nama_kelas }}</td>
			<td>{{ $k->jenis_kelas }}</td>
			
			<td>
				<a class="btn btn-warning btn-sm" href="/kelas/edit/{{ $k->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/kelas/hapus/{{ $k->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>