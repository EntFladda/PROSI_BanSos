@extends('masyarakat.template')

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

        .btn-detail {
            background-color: #1b3b40;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-confirm {
            background-color: #007bff;
            color: black;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-secondary {
            background-color: #1b3b40;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
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
                    <th style="text-align: center;">NAMA</th>
                    <th style="text-align: center;">NO KK</th>
                    <th style="text-align: center;">JENIS BANSOS</th>
                    <th style="text-align: center;">STATUS</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Rose</td>
                    <td>911</td>
                    <td>BLT</td>
                    <td><a href="/konfirmasi_bansos" class="btn-confirm">Konfirmasi Penerimaan Bansos</a></td>
                    <td><a href="{{ url('/konfirmasi/detail/1') }}" class="btn-detail"><i class="fas fa-info-circle"> Detail </a></i>
                        <button class="btn btn-secondary" onclick="cetakLaporan(1)"><i class="fas fa-solid fa-print"></i>Cetak</button>
                    </td>
                </tr>
            </table>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script>
        function cetakLaporan(id) {
            var detailUrl = "{{ url('/konfirmasi/detail/') }}/" + id;
            var newWindow = window.open(detailUrl, '', 'width=800,height=600');
            newWindow.print();
        }

        function saveAsPDF(id) {
            var detailUrl = "{{ url('/laporanpenerimaanrw/detail/') }}/" + id;
            fetch(detailUrl)
                .then(response => response.text())
                .then(html => {
                    const { jsPDF } = window.jspdf;
                    const doc = new jsPDF();
                    doc.fromHTML(html, 10, 10);
                    doc.save('laporan-bansos-' + id + '.pdf');
                });
        }
    </script>
        </div>
    </div>
@endsection
