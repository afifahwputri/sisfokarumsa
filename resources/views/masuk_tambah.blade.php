<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Data Pendaftaran</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pendaftaran - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/masuk" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/masuk/store">

                        {{ csrf_field() }}

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
                            <label>No Kartu</label>
                            <input type="text" name="nokartu" class="form-control" placeholder="No kartu ..">

                            @if($errors->has('nokartu'))
                                <div class="text-danger">
                                    {{ $errors->first('nokartu')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" class="form-control">

                        </div>

                        <div class="form-group">
                            <label>ID Ranjang</label>
                            <input type="text" name="idranjang" class="form-control" placeholder="ID Ranjang ..">

                            @if($errors->has('idranjang'))
                                <div class="text-danger">
                                    {{ $errors->first('idranjang')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" placeholder="Status ..">

                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif

                        </div

                        <div class="form-group">
                            <label>Tanggal Keluar</label>
                            <input type="date" name="tgl_keluar" class="form-control">

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