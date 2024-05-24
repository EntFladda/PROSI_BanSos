@extends('kelurahan.template')

@section('content')

<style>
  table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

table, th, td {
  border: 1px solid #bdc3c7;
}

th, td {
    padding: 10px;
    text-align: left;
}

th {
  color: white;
  background-color: #1b3b40;
}

button {
    padding: 5px 10px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

button.info {
    background-color: #2196F3;
    color: white;
}

button.approve {
    background-color: #4CAF50;
    color: white;
}

button.reject {
    background-color: #f44336;
    color: white;
}

h2 {
    color: #333;
    margin-top: 0;
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
.btn-confirm {
  background-color: #007bff;
  color: black;
  padding: 5px 10px;
  text-decoration: none;
  border-radius: 5px;
}
.delete-btn {
  background-color: #dc3545; /* Red color for the delete icon */
  color:white;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  font-size: 16px; /* Adjust the icon size as needed */
  margin-left: 5px; /* Add some spacing between the icons */
}
</style>
<div class="card">
    <div class="card-header">
      <h1 style="font-size:30px;font-weight:bold;text-align:center;">FORM VALIDASI PENGAJUAN BANSOS RW 08</h1>
        <div class="card-tools"></div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
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
          
          <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Aksi</th>
                    <th>Nama</th>
                    <th>No Kartu Keluarga</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a>
                    </td>
                    <td>Lisa</td>
                    <td>0100100010010110</td>
                    <td>11-04-2024</td>
                    <td>
                        <button class="approve">Disetujui</button>
                        <button class="reject">Ditolak</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a></td>
                    <td>Rose</td>
                    <td>0100100010010110</td>
                    <td>12-09-2024</td>
                    <td>
                        <button class="approve">Disetujui</button>
                        <button class="reject">Ditolak</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a></td>
                    <td>Jisoo</td>
                    <td>0100100010010110</td>
                    <td>26-05-2024</td>
                    <td>
                        <button class="approve">Disetujui</button>
                        <button class="reject">Ditolak</button>
                    </td>
                </tr>
            </tbody>
        </table>
    <section>
        <h2 style="font-size: 23px;text-align:center;font-weight:bold">PENGAJUAN DISETUJUI</h2>
        <table>
            <thead>
                <tr>
                    <th style="background-color:#4CAF50">No</th>
                    <th style="background-color:#4CAF50">Aksi</th>
                    <th style="background-color:#4CAF50">Nama</th>
                    <th style="background-color:#4CAF50">No Kartu Keluarga</th>
                    <th style="background-color:#4CAF50">Status</th>
                </tr>
            </thead>
            <tbody id="approved-list">
                <tr>
                    <td>1</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a></td>
                    <td>Lisa</td>
                    <td>101010110010010100</td>
                    <td><button class="approve">Disetujui</button></td>
                </tr>
            </tbody>
        </table>
    </section>
    <section>
        <h2 style="font-size: 23px;text-align:center;font-weight:bold">PENGAJUAN DITOLAK</h2>
        <table>
            <thead>
                <tr>
                    <th style="background-color: #f44336;">No</th>
                    <th style="background-color: #f44336;">Aksi</th>
                    <th style="background-color: #f44336;">Nama</th>
                    <th style="background-color: #f44336;">No Kartu Keluarga</th>
                    <th style="background-color: #f44336;">Status</th>
                </tr>
            </thead>
            <tbody id="rejected-list">
                <tr>
                    <td>1</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a></td>
                    <td>Rose</td>
                    <td>1234526671272717</td>
                    <td><button class="reject">Ditolak</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><button class="info">i</button>
                      <a href="#" class="delete-btn"><i class="fas fa-trash-alt"></i></a></td>
                    <td>Jisoo</td>
                    <td>234567890398765</td>
                    <td><button class="reject">Ditolak</button></td>
                </tr>
            </tbody>
        </table>
    </section>
             
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