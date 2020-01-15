<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Data Kelas</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Kelas - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/kelas" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/kelas/store">

                        {{ csrf_field() }}

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
                            <label>Nama Kelas</label>
                            <input type="text" name="nama_kelas" class="form-control" placeholder="Nama kelas ..">

                            @if($errors->has('nama_kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_kelas')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Jenis Kelas</label>
                            <input type="text" name="jenis_kelas" class="form-control" placeholder="Jenis kelas ..">

                            @if($errors->has('jenis_kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelas')}}
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