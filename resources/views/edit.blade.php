@extends('master2')
<head>
        @foreach ($pegawai as $p)
            <title>edit pegawai : {{$p->pegawai_nama}}</title>
        @endforeach
</head>

@section('konten')
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update/{{$p->pegawai_id}}" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-5">
                <div class="form-group row">
                    <div class="col-3">
                        <label for="nama" class="col-xs-3 col-form-label mr-3">Nama:</label>
                    </div>
                    <div class="col-9">
                        <input required="required"  type="text" class="form-control" id="nama" name="nama" value="{{ $p->pegawai_nama }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="jabatan" class="col-xs-3  col-form-label mr-3" >Jabatan:</label>
                    </div>
                    <div class="col-9">
                        <input required="required" type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="umur" class="col-xs-3  col-form-label mr-3">Umur:</label>
                    </div>
                    <div class="col-9">
                        <input required="required" type="number" class="form-control" id="umur" name="umur" value="{{ $p->pegawai_umur }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="alamat" class="col-xs-3  col-form-label mr-3">Alamat:</label>
                    </div>
                    <div class="col-9">
                        <textarea required="required" name="alamat" id="alamat" cols="40" rows="5">{{ $p->pegawai_alamat }}</textarea>
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
