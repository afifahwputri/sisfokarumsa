<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Create Data Bed</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Bed - <strong>TAMBAH DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/bed" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/bed/store">

                        {{ csrf_field() }}

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
                            <label>No Ranjang</label>
                            <input type="text" name="noranjang" class="form-control" placeholder="No Ranjang ..">

                            @if($errors->has('noranjang'))
                                <div class="text-danger">
                                    {{ $errors->first('noranjang')}}
                                </div>
                            @endif

                        </div>


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
                            <label>Status</label>
                            <input type="text" name="status" class="form-control" placeholder="Status ..">

                            @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
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