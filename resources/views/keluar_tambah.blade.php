<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Data Keluar</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Keluar - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/keluar" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/keluar/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>ID Keluar</label>
                            <input type="text" name="idkeluar" class="form-control" placeholder="ID Keluar ..">

                            @if($errors->has('idkeluar'))
                                <div class="text-danger">
                                    {{ $errors->first('idkeluar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>No Daftar</label>
                            <input type="text" name="nodaftar" class="form-control" placeholder="No Daftar ..">

                            @if($errors->has('nodaftar'))
                                <div class="text-danger">
                                    {{ $errors->first('nodaftar')}}
                                </div>
                            @endif

                        </div>


                        <div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tgl_keluar" class="form-control">

                        </div>

                        <div class="form-group">
                            <label>ID Ruang</label>
                            <input type="text" name="id_ruang" class="form-control" placeholder="ID Ruang ..">

                            @if($errors->has('id_ruang'))
                                <div class="text-danger">
                                    {{ $errors->first('id_ruang')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Lama Inap</label>
                            <input type="text" name="lama_inap" class="form-control" placeholder="Lama inap ..">

                            @if($errors->has('lama_inap'))
                                <div class="text-danger">
                                    {{ $errors->first('lama_inap')}}
                                </div>
                            @endif

                        </div

                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>