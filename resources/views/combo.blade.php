@extends('master2')
@section('judulhalaman', 'Kategori')

@section('konten')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<body>
    <h2>Pilih Kategori</h2>
    <form action="/comboRequest">
        <select class="form-select" name="pilihkategori" id="pilihkategori">
            @foreach ($kategori as $k)
                <option class="select-form" value="{{$k->Nama}}">{{$k->Nama}}</option>
            @endforeach
        </select>
        <input type="submit" value="Kirim" class="btn btn-primary mt-3">
    </form>


</body>
@endsection
