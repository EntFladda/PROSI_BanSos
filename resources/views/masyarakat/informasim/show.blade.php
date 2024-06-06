@extends('masyarakat.template')

@section('content')
    <style>
        .h3 {
            c
        }
    </style>
    <div class="card">
        <div class="card-header">
            <h1 style="font-size:30px;font-weight:bold;text-align:center;">{{ __('Detail Informasi Bansos BPNT') }}</h1>
            <div class="card-tools"></div>
        </div>
        <div class="card-body">
            <a></a>
            <a></a>
            <a href="{{ url('informasi') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h3>
                Program Bantuan Pangan Non Tunai (BPNT) bagi KPM (Keluarga Penerima Manfaat) PKH yaitu dengan pemberian
                bantuan sebesar Rp. 200.000- (dua ratus ribu rupiah) yang dapat dipergunakan untuk membeli sembako bukan
                makanan olahan (seperti nugget,sosis,abon,telur asin, ikan, dll) dan diharapkan menggunakan potensi yang ada
                di wilayah (sayur-mayur,buah-buahan,pembuat tahu tempe di wilayah, dll).

                Bantuan Pangan Non Tunai (BPNT) harus memenuhi 4 komponen yaitu :
                <br><br>
                <li>Sumber Karbohidrat : Beras atau bahan pangan lokal seperti jagung pilihan dan sagu.</li>
                <li>Sumber protein hewani : telur, daging sapi, daging ayam, ikan</li>
                <li>Sumber Protein nabati : kacang-kacangan, tahu dan tempe</li>
                <li>Sumber vitamin dan mineral : sayur-mayur, buah -buahan</li>
            </h3>
        </div>
    </div>
@endsection
