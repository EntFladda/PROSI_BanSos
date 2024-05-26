@extends('masyarakat.template')

@section('content')

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #bdc3c7;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #1b3b40;
        color: white;
    }

    td {
        background-color: white;
        color: #34495e;
    }

    .btn {
        background-color: #1b3b40;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        display: inline-block;
    }

    .btn i {
        margin-right: 5px;
    }
</style>
<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">INFORMASI BANTUAN SOSIAL</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table style="width: 100%;border-collapse: collapse;margin-top: 20px;border: 1px solid #bdc3c7;">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Aksi</th>
                <th style="text-align: center;">JENIS BANSOS</th>
                <th></th>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="#" class="btn"><i class="fas fa-info-circle"></i> Detail</a></td>
                <td style="font-weight: bold">Bantuan Pangan Non Tunai (BPNT)</td>
                <td><a href="#" class="btn"><i class="fas fa-plus-circle"></i> Tambah Pengajuan Bansos</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td><a href="#" class="btn"><i class="fas fa-info-circle"></i> Detail</a></td>
                <td style="font-weight: bold">Program Keluarga Harapan (PKH)</td>
                <td><a href="#" class="btn"><i class="fas fa-plus-circle"></i> Tambah Pengajuan Bansos</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td><a href="#" class="btn"><i class="fas fa-info-circle"></i> Detail</a></td>
                <td style="font-weight: bold">Bantuan Langsung Tunai</td>
                <td><a href="#" class="btn"><i class="fas fa-plus-circle"></i> Tambah Pengajuan Bansos</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td><a href="#" class="btn"><i class="fas fa-info-circle"></i> Detail</a></td>
                <td style="font-weight: bold">Bantuan Sosial Beras</td>
                <td><a href="#" class="btn"><i class="fas fa-plus-circle"></i> Tambah Pengajuan Bansos</a></td>
            </tr>
        </table>
    </div>
</div>
@endsection