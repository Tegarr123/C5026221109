@extends('master2')
@section('judulhalaman', 'Nilai Kuliah')

@section('konten')
    <body>
        <h1>Nama = Ahmad Fadhino Tegar Permana</h1>
        <h2>5026221109</h2>
        <a href="/nilaikuliah/tambahData" class="btn btn-primary"> + Tambah nilai Baru</a>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
            @foreach ($nilaikuliah as $nk)
                <tr>
                    <td>{{$nk->ID }} </td>
                    <td>{{$nk->NRP}}</td>
                    <td>{{$nk->NilaiAngka}}</td>
                    <td>{{$nk->SKS}}</td>
                    <td>
                    @if ($nk->NilaiAngka<=40)
                    D
                    @elseif ($nk->NilaiAngka>=41 && $nk->NilaiAngka<=60)
                    C
                    @elseif ($nk->NilaiAngka>=61 && $nk->NilaiAngka<=80)
                    B
                    @else
                    A
                    @endif
                </td>
                    <td>{{$nk->NilaiAngka*$nk->SKS}}</td>
                </tr>

            @endforeach
        </table>
    </body>
@endsection
