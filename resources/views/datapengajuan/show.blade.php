@extends('rw.template')

@section('content')

<div class="card">
    <div class="card-header">
        <h1 style="font-size:30px;font-weight:bold;text-align:center;">{{ $page->title }}</h1>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover table-sm">
            <tr>
                <th>ID</th>
                <td>{{ $entry->id }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $entry->nama }}</td>
            </tr>
            <tr>
                <th>No Kartu Keluarga</th>
                <td>{{ $entry->no_kartu_keluarga }}</td>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <td>{{ $entry->pekerjaan }}</td>
            </tr>
            <tr>
                <th>Tanggal Pengajuan</th>
                <td>{{ $entry->tanggal_pengajuan }}</td>
            </tr>
        </table>
        <a href="{{ url('datapengajuan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>

@endsection
