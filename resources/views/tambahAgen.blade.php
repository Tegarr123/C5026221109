@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')
<body>
    <form action="/agen/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-5">
                <div class="form-group row">
                    <div class="col-3">
                        <label for="namaagen" class="col-xs-8 col-form-label mr-3">Nama agen:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="namaagen" name="namaagen">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="jumlahagen" class="col-xs-3  col-form-label mr-3">Jumlah Agen:</label>
                    </div>
                    <div class="col-9">
                        <input type="number" class="form-control" id="jumlahagen" name="jumlahagen">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-3">
                        <label for="tersedia" class="col-xs-3  col-form-label mr-3">Tersedia:</label>
                    </div>
                    <div class="col-9">
                        <input type="text" class="form-control" id="tersedia" name="tersedia">
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</body>
@endsection
