@extends('kelurahan.template')

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

        .btn-edit {
            background-color: yellow;
            color: black;
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
    </style>
    <div class="card">
        <div class="card-header">
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">INFORMASI BANTUAN SOSIAL</h1>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <div class="info-button">
                <button>+Tambah Informasi</button>
            </div>
            <table style="width: 100%;border-collapse: collapse;margin-top: 20px;border: 1px solid #bdc3c7;">
                <tr>
                    <th style="text-align: center;">No</th>
                    <th style="text-align: center;">Aksi</th>
                    <th style="text-align: center;">JENIS BANSOS</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td><a href="{{ url('/informasik/detail/1') }}" class="btn-detail"><i class="fas fa-info-circle"></i> Detail </a>
                        <a href="/edit_informasi_kelurahan" class="btn-edit"><i class="fas fa-pen"></i> Edit </a>
                        <a href="{{ url('/delete') }}" class="btn-delete"><i class="fas fa-trash"></i> Delete </a>
                    </td>
                    <td>Bantuan Pangan Non Tunai (BPNT)</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="{{ url('/informasik/detail/2') }}" class="btn-detail"><i class="fas fa-info-circle"></i> Detail </a>
                        <a href="/edit_informasi_kelurahan" class="btn-edit"><i class="fas fa-pen"></i> Edit </a>
                        <a href="/delete_informasi_kelurahan" class="btn-delete"><i class="fas fa-trash"></i> Delete </a>
                    </td>
                    <td>Program Keluarga Harapan (PKH)</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="{{ url('/informasik/detail/3') }}" class="btn-detail"><i class="fas fa-info-circle"></i> Detail </a>
                        <a href="/edit_informasi_kelurahan" class="btn-edit"><i class="fas fa-pen"></i> Edit </a>
                        <a href="/delete_informasi_kelurahan" class="btn-delete"><i class="fas fa-trash"></i> Delete </a>
                    </td>
                    <td>Bantuan Langsung Tunai</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><a href="{{ url('/informasik/detail/4') }}" class="btn-detail"><i class="fas fa-info-circle"></i> Detail </a>
                        <a href="/edit_informasi_kelurahan" class="btn-edit"><i class="fas fa-pen"></i> Edit </a>
                        <a href="/delete_informasi_kelurahan" class="btn-delete"><i class="fas fa-trash"></i> Delete </a>
                    </td>
                    <td>Bantuan Sosial Beras</td>
                </tr>
            </table>
        </div>
    </div>
    <script>
        $('.btn-delete').on('click', function() {
                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    var id = $(this).data('id');
                    $.ajax({
                        url: '/penerimas/' + id,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert('Data berhasil dihapus');
                            location.reload();
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        </script>
@endsection
