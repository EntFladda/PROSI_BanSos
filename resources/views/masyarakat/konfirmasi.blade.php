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
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">KONFIRMASI BANTUAN SOSIAL</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table style="width: 100%;border-collapse: collapse;margin-top: 20px;border: 1px solid #bdc3c7;">
            <tr>
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Aksi</th>
                <th style="text-align: center;">Nama</th>
                <th style="text-align: center;">No. KK</th>
                <th style="text-align: center;">Jenis Bansos</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </table>
    </div>
</div>
@endsection