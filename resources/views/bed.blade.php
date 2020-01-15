<!DOCTYPE html>
<html>
<head>
	<title>Data Bed</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Data Bed</h1>
	<p>Cari Data Bed :</p>
	<form action="/bed/cari" method="GET"  class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Bed .." value="{{ old('cari') }}">
		<input  class="btn btn-primary ml-3" type="submit" value="CARI">
	</form>
		
	<br/>
 
	<a href="/bed/tambah"> + Tambah Bed Baru</a>
	
	<br/>
	<br/>
 
 
	<table border="1"  class="table table-bordered">
		<tr>
			<th>ID Ranjang</th>
			<th>No Ranjang</th>
			<th>ID Ruang</th>
			<th>Status</th>
			<th>Opsi</th>
			
		</tr>
		@foreach($bed as $b)
		<tr>
			<td>{{ $b->idranjang }}</td>
			<td>{{ $b->noranjang }}</td>
			<td>{{ $b->idruang }}</td>
			<td>{{ $b->status }}</td>
			
			<td>
				<a class="btn btn-warning btn-sm" href="/bed/edit/{{ $b->id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/bed/hapus/{{ $b->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

 
</body>
</html>