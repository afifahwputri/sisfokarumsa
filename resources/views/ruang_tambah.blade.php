<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Data Ruang</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Ruang - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/ruang" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/ruang/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>ID Ruang</label>
                            <input type="text" name="idruang" class="form-control" placeholder="ID Ruang ..">

                            @if($errors->has('idruang'))
                                <div class="text-danger">
                                    {{ $errors->first('idruang')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Kode Ruang</label>
                            <input type="text" name="kdruang" class="form-control" placeholder="Kode Ruang ..">

                            @if($errors->has('kdruang'))
                                <div class="text-danger">
                                    {{ $errors->first('kdruang')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Nama Ruang</label>
                            <input type="text" name="nama_ruang" class="form-control" placeholder="Nama Ruang ..">

                            @if($errors->has('nama_ruang'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_ruang')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>ID Kelas</label>
                            <input type="text" name="idkelas" class="form-control" placeholder="ID Kelas ..">

                            @if($errors->has('idkelas'))
                                <div class="text-danger">
                                    {{ $errors->first('idkelas')}}
                                </div>
                            @endif

                        </div>



                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>