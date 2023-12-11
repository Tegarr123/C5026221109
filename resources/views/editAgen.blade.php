@extends('master2')
<head>
        @foreach ($agen as $a)
            <title>edit agen : {{$a->namaagen}}</title>
        @endforeach
</head>

@section('konten')
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/agen">Kembali</a>

	<br/>
	<br/>

	@foreach($agen as $a)
	<form action="/agen/update/{{$a->kodeagen}}" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-5">
                <div class="form-group row">
                    <div class="col-3">
                        <label for="namaagen" class="col-xs-8 col-form-label mr-3">Nama agen:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="namaagen" name="namaagen" value="{{$a->namaagen}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="jumlahagen" class="col-xs-3  col-form-label mr-3">Jumlah Agen:</label>
                    </div>
                    <div class="col-9">
                        <input type="number" class="form-control" id="jumlahagen" name="jumlahagen" value="{{$a->jumlahagen}}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="tersedia" class="col-xs-3  col-form-label mr-3">Tersedia:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="tersedia" name="tersedia" value="{{$a->tersedia}}">
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection
