<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftaran</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Pendaftaran</h1>
	<p>Cari Data Pendaftaran :</p>
	<form action="/masuk/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pendaftaran .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/masuk/tambah"> + Tambah Pendaftar Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>No Daftar</th>
			<th>No Kartu</th>
			<th>Tgl Daftar</th>
			<th>ID Ranjang</th>
			<th>Status</th>
			<th>Tanggal Keluar</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($masuk as $m)
		<tr>
			<td>{{ $m->nodaftar }}</td>
			<td>{{ $m->pasien->nokartu }}</td>
			<td>{{ $m->tgl_daftar }}</td>
			<td>{{ $m->idranjang }}</td>
			<td>{{ $m->status }}</td>
			<td>{{ $m->tgl_keluar }}</td>
			
			
			<td>
				<a class="btn btn-warning btn-sm" href="/masuk/edit/{{ $m->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/masuk/hapus/{{ $m->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>