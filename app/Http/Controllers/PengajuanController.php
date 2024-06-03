<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Data;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'no_KK' => 'required|string|max:50',
            'no_tlp' => 'required|string|max:20',
            'nama' => 'required|string',
            'penghasilan' => 'required|integer',
            'Pekerjaan' => 'required|string|max:150',
            'kondisi_rumah' => 'required|string',
            'jumlah_tanggungan' => 'required|integer',
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_ruang_tamu' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_dapur' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = new Data;
        $data->nama = $request->nama;
        $data->no_KK = $request->no_KK;
        $data->no_tlp = $request->no_tlp;
        $data->penghasilan = $request->penghasilan;
        $data->Pekerjaan = $request->Pekerjaan;
        $data->kondisi_rumah = $request->kondisi_rumah;
        $data->jumlah_tanggungan = $request->jumlah_tanggungan;

        // Simpan foto ke dalam sistem file
        $data->foto_depan = $request->file('foto_depan')->store('public/foto_rumah');
        $data->foto_ruang_tamu = $request->file('foto_ruang_tamu')->store('public/foto_rumah');
        $data->foto_dapur = $request->file('foto_dapur')->store('public/foto_rumah');

        $data->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}