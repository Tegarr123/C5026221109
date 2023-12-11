<html>
    <head>
        <title>
            @foreach ($agen as $a)
                {{$a->namaagen}}
            @endforeach
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body>
        @foreach ($agen as $a)
            <div class="row container mt-3 h-100 align-items-center">
                <div class="col-6"></div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <b style="font-size: 30px">Kode agen</b>
                        </div>
                        <div class="col-6" style="font-size: 30px">
                            <b>:</b>&ensp;{{$a->kodeagen}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <b style="font-size: 30px">Nama agen</b>
                        </div>
                        <div class="col-6" style="font-size: 30px">
                            <b>:</b>&ensp;{{$a->namaagen}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <b style="font-size: 30px">Jumlah Agen</b>
                        </div>
                        <div class="col-6" style="font-size: 30px">
                            <b>:</b>&ensp;{{$a->jumlahagen}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="font-size: 30px">
                            <b style="font-size: 30px">Tersedia</b>
                        </div>
                        <div class="col-6" style="font-size: 30px">
                            <b >:</b>&ensp;{{$a->tersedia}}
                        </div>
                    </div>
                    <a href="/agen"><button class="btn btn-success w-50 mt-5">OK</button></a>
                </div>
            </div>
        @endforeach

    </body>
</html>
