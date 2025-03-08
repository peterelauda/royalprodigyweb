<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Data Nasabah Royal Prodigy</title>
        <style>
            .jarak{
                margin-bottom: 50px;
                margin-left: 120px
            }
            .batas{
                margin-top: 30px;
                margin-left: 120px
            }
            .rata{
                margin-top: 5px;
                margin-left: 120px;
                margin-bottom: 5px
            }
        </style>
    </head>
    <body>
        <div class="batas">
            <img src="img/logo axa.png"  width="200px" height="200px">
        </div>
        <h1 class="rata">AXA Financial</h1>
        <h2 class="rata">Royal Prodigy Team</h2>
        <h7 class="rata">Data Bank Nama Calon Nasabah</h7>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Nasabah - <a href="https://www.axa-financial.co.id" target="_blank">www.axa-financial.co.id</a>
                </div>
                <div class="card-body">
                    <a href="/nasabah/tambah" class="btn btn-primary">Input Nasabah Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nasabah as $n)
                            <tr>
                                <td>{{ $n->nik }}</td>
                                <td>{{ $n->nama }}</td>
                                <td>{{ $n->pekerjaan }}</td>
                                <td>{{ $n->alamat }}</td>
                                <td>
                                    <a href="/nasabah/edit/{{ $n->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/nasabah/hapus/{{ $n->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style type="text/css">
            .pagination li{
                float: left;
                list-style-type: none;
                margin:5px;
            }
        </style>
        <br/>
        <div class="jarak">
            Halaman : {{ $nasabah->currentPage() }} <br/>
            Jumlah Data : {{ $nasabah->total() }} <br/>
            Data per Halaman : {{ $nasabah->perPage() }}

            {{ $nasabah->links() }}
        </div>
    </body>
</html>