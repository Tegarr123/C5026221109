@extends('master2')
@section('judulhalaman', 'Kategori')

@section('konten')
<body>
    @foreach ($kategori as $k)
        <h1>Anda telah memilih kategori dengan kode : {{$k->ID}}</h1>

    @endforeach
</body>
@endsection
