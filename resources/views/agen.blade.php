@extends('master2')
@section('judulhalaman', 'Data Agen')

@section('konten')
<h3>Data Agen</h3>

<a href="/agen/tambah" class="btn btn-primary"> + Tambah agen Baru</a>

<br/>
<p>Cari Data Agen :</p>
<form action="/agen/cari" method="GET">
<input class="form-control" type="text" name="cari" placeholder="Cari nama Agen .."
value="{{ old("cari", isset($cari) ? $cari : '') }}">
<input type="submit" value="CARI" class="btn btn-info">
</form>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Agen</th>
        <th>Nama Agen</th>
        <th>Jumlah Agen</th>
        <th>Tersedia</th>
    </tr>
    @foreach($agen as $a)
    <tr>
        <td>{{ $a->kodeagen }}</td>
        <td>{{ $a->namaagen }}</td>
        <td>{{ $a->jumlahagen }}</td>
        <td>{{ $a->tersedia }}</td>
        <td>
            <a href="/agen/view/{{ $a->kodeagen}}" class="btn btn-success">View</a>
            |
            <a href="/agen/edit/{{ $a->kodeagen }}" class="btn btn-warning">Edit</a>
            |
            <a href="/agen/hapus/{{ $a->kodeagen }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{$agen->links()}}
@endsection
