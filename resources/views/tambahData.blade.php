@extends('master2')
@section('judulhalaman', 'Tambah Data')

@section('konten')
	<form action="/nilaikuliah/tambahData" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-5">
                <div class="form-group row">
                    <div class="col-4">
                        <label for="NRP" class="col-xs-8 col-form-label mr-3">NRP:</label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" id="NRP" name="NRP">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                        <label for="NilaiAngka" class="col-xs-3  col-form-label mr-3">Nilai Angka:</label>
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-4">
                        <label for="SKS" class="col-xs-3  col-form-label mr-3">SKS:</label>
                    </div>
                    <div class="col-8">
                        <input type="number" class="form-control" id="SKS" name="SKS">
                    </div>
                </div>
            </div>
        </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
