<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data Pasien</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Pasien - <strong>EDIT DATA</strong>
                </div>
                <div class="card-body">
                    <a href="/pasien" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    @foreach($pasien as $pasiens)
                    <form method="post" action="/pasien/update/{{$pasiens->id}}">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>No Kartu</label>
                            <input type="text" name="nokartu" class="form-control" placeholder="No kartu .." value=" {{ $pasiens->nokartu }}">

                            @if($errors->has('nokartu'))
                                <div class="text-danger">
                                    {{ $errors->first('nokartu')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Daftar</label>
                            <input type="date" name="tgl_daftar" class="form-control" value="{{ $pasiens->tgl_daftar }}">

                        </div>

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama pasien .." value=" {{ $pasiens->nama }}">

                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat pasien ..">{{ $pasiens->alamat }}</textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir .." value=" {{ $pasiens->tempat_lahir }}">

                            @if($errors->has('tempat_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tempat_lahir')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control" value="{{ $pasiens->tgl_lahir }}">

                        </div>

                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" name="agama" class="form-control" placeholder="Agama .." value=" {{ $pasiens->agama }}">

                            @if($errors->has('agama'))
                                <div class="text-danger">
                                    {{ $errors->first('agama')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Golongan Darah</label>
                            <input type="text" name="goldar" class="form-control" placeholder="Golongan darah .." value=" {{ $pasiens->goldar }}">

                            @if($errors->has('goldar'))
                                <div class="text-danger">
                                    {{ $errors->first('goldar')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Jenis kelamin .." value=" {{ $pasiens->jenis_kelamin }}">

                            @if($errors->has('jenis_kelamin'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_kelamin')}}
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="idkelas" class="form-control" placeholder="Kelas .." value=" {{ $pasiens->idkelas }}">

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
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>