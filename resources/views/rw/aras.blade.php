@extends('rw.template')

@section('content')
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #bdc3c7;
        }

        th,
        td {
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

        .info-button {
            margin-top: 20px;
            text-align: right;
        }

        .info-button button {
            background-color: #1b3b40;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .btn-detail {
            background-color: #1b3b40;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-success {
            background-color: #07db2e;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-delete {
            background-color: red;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-success1 {
            background-color:#1A4D2E;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success2 {
            background-color:#AF8260;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success3 {
            background-color:#8E3E63;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success4 {
            background-color:#D10363;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success5 {
            background-color:#028391;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-success6 {
            background-color:#FF7D29;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">SISTEM PENDUKUNG KEPUTUSAN METODE ARAS</h1>
            <div class="card-tools"></div>

        </div>
        <div class="card-body">
            <nav id="navbar" class="navbar">
                <tr>
                    <th><a class="btn-success1" href="/data_kriteria_aras">Data Kriteria</a></th>
                    <th><a class="btn-success2" href="/data_sub_kriteria">Data Sub Kriteria</a></th>
                    <th><a class="btn-success3" href="/data_alternatif">Data Alternatif</a></th>
                    <th><a class="btn-success4" href="/data_penilaian">Data Penilaian</a></th>
                    <th><a class="btn-success5" href="/data_perhitungan">Data Perhitungan</a></th>
                    <th><a class="btn-success6" href="/data_hasil_akhir">Data Hasil Akhir</a></th>
                </tr>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <div class="card-body">
                <div class="info-button">
                </div>
                <table style="width: 100%;border-collapse: collapse;margin-top: 20px;border: 1px solid #bdc3c7;">
                    <tr>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Aksi</th>
                        <th style="text-align: center;">NAMA</th>
                        <th style="text-align: center;">NO KARTU KELUARGA</th>
                        <th style="text-align: center;">TANGGAL PENGAJUAN</th>
                        <th style="text-align: center;">AKSI</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="{{ url('/validasi/detail/1') }}" class="btn-detail"><i class="fas fa-info-circle"></i>
                                Detail</a>
                            <a href="{{ url('/delete/1') }}" class="btn-delete"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                        <td>Lisa</td>
                        <td>000900</td>
                        <td>11 April 2024</td>
                        <td><a href="/pengajuan_disetujui" class="btn-success">Disetujui</a>
                            <a href="/pengajuan_ditolak" class="btn-delete">Ditolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="{{ url('/validasi/detail/2') }}" class="btn-detail"><i class="fas fa-info-circle"></i>
                                Detail</a>
                            <a href="{{ url('/delete/2') }}" class="btn-delete"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                        <td>Rose</td>
                        <td>000900</td>
                        <td>11 April 2024</td>
                        <td><a href="/pengajuan_disetujui" class="btn-success">Disetujui</a>
                            <a href="/pengajuan_ditolak" class="btn-delete">Ditolak</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="{{ url('/validasi/detail/3') }}" class="btn-detail"><i class="fas fa-info-circle"></i>
                                Detail</a>
                            <a href="{{ url('/delete/3') }}" class="btn-delete"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                        <td>Jiso</td>
                        <td>000900</td>
                        <td>11 April 2024</td>
                        <td><a href="/pengajuan_disetujui" class="btn-success">Disetujui</a>
                            <a href="/pengajuan_ditolak" class="btn-delete">Ditolak</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="card-body"><br><br>

            </div>
        </div>
    @endsection
