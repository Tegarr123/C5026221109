@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-5">
                <div class="form-group row">
                    <div class="col-3">
                        <label for="nama" class="col-xs-8 col-form-label mr-3">Nama:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="nama" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="jabatan" class="col-xs-3  col-form-label mr-3">Jabatan:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="umur" class="col-xs-3  col-form-label mr-3">Umur:</label>
                    </div>
                    <div class="col-9">
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="alamat" class="col-xs-3  col-form-label mr-3">Alamat:</label>
                    </div>
                    <div class="col-9">
                        <textarea name="alamat" id="alamat" cols="40" rows="5"></textarea>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
