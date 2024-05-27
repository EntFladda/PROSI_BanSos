@extends('rt.template')

@section('content')
<h1 style="font-size:30px;font-weight:bold;text-align:center;">LIHAT LAPORAN PENGAJUAN</h1>
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
    .data-table .btn-detail {
  background-color: #1b3b40;
  color: #fff;
  padding: 5px 10px;
  text-decoration: none;
  border-radius: 5px;
    }
    

    .table-controls {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 1rem;
}

.entries-per-page {
  display: flex;
  align-items: center;
}

.search-container {
  display: flex;
  align-items: center;
}

#entries-per-page {
  margin-left: 0.5rem;
  margin-right: 0.5rem;
}

#search-input {
  padding: 0.5rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.table-pagination {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 1rem;
}

.pagination-info {
  font-size: 0.9rem;
}

.pagination-links .pagination-link {
  text-decoration: none;
  margin-left: 0.5rem;
}
</style>
<div class="card">
    <div class="card-header">
        
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <div class="table-controls">
            <label for="entries-per-page">Show:</label>
            <select id="entries-per-page">
              <option value="10">10</option>
              <option value="25">25</option>
              <option value="50">50</option>
              <option value="100">100</option>
            </select>entries
          
            <input type="text" id="search-input" placeholder="Search...">
          </div>
          
        <table class="data-table">
            <thead>
              <tr>
                <th style="text-align: center">No</th>
                <th style="text-align: center">Aksi</th>
                <th style="text-align: center">Nama</th>
                <th style="text-align: center">No Kartu Keluarga</th>
                <th style="text-align: center">Jenis Bansos</th>
                <th style="text-align: center">Status</th>
                <th style="text-align: center">Tanggal Pengajuan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a href="{{ url('/laporanpengajuanrt/detail/1') }}" class="btn-detail">Detail</a></td>
                <td>Lisa</td>
                <td>0100100001001010</td>
                <td>BLT</td>
                <td>Disetujui</td>
                <td>11-04-2024</td>
              </tr>
              <tr>
                <td>2</td>
                <td><a href="{{ url('/laporanpengajuanrt/detail/2') }}" class="btn-detail">Detail</a></td>
                <td>Rose</td>
                <td>0100100001001010</td>
                <td>PKH</td>
                <td>Ditolak</td>
                <td>12-09-2024</td>
              </tr>
              <tr>
                <td>3</td>
                <td><a href="{{ url('/laporanpengajuanrt/detail/3') }}" class="btn-detail">Detail</a></td>
                <td>Jisoo</td>
                <td>0100100001001010</td>
                <td>BPNT</td>
                <td>Disetujui</td>
                <td>26-05-2024</td>
              </tr>
            </tbody>
          </table>
          <div class="table-pagination">
            <div class="pagination-info">Showing 1 to 1 of 1 entries</div>
            <div class="pagination-links">
              <a href="#" class="pagination-link prev">Previous</a>
              <a href="#" class="pagination-link next">Next</a>
            </div>
          </div>
    </div>
</div>
@endsection