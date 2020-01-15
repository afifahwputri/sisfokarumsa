<!DOCTYPE html>
<html>
<head>
	<title>Data Keluar</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Keluar</h1>
	<p>Cari Data Keluar :</p>
	<form action="/keluar/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Keluar .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/keluar/tambah"> + Tambah Keluar Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>ID Keluar</th>
			<th>No Daftar</th>
			<th>Tanggal Keluar</th>
			<th>ID Ruang</th>
			<th>Lama Inap</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($keluar as $l)
		<tr>
			<td>{{ $l->idkeluar }}</td>
			<td>{{ $l->nodaftar }}</td>
			<td>{{ $l->tgl_keluar }}</td>
			<td>{{ $l->id_ruang }}</td>
			<td>{{ $l->lama_inap }}</td>
			
			<td>
				<a class="btn btn-warning btn-sm" href="/keluar/edit/{{ $l->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/keluar/hapus/{{ $l->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>