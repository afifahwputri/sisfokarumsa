<!DOCTYPE html>
<html>
<head>
	<title>Data Ruang</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Ruang</h1>
	<p>Cari Data Ruang :</p>
	<form action="/ruang/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Ruang .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/ruang/tambah"> + Tambah Ruang Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>ID Ruang</th>
			<th>Kode Ruang</th>
			<th>Nama Ruang</th>
			<th>ID Kelas</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($ruang as $r)
		<tr>
			<td>{{ $r->idruang }}</td>
			<td>{{ $r->kdruang }}</td>
			<td>{{ $r->nama_ruang }}</td>
			<td>{{ $r->idkelas }}</td>
			
			<td>
				<a class="btn btn-warning btn-sm" href="/ruang/edit/{{ $r->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/ruang/hapus/{{ $r->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>