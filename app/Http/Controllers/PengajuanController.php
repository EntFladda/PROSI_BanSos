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
            'surat_keterangan_tidak_mampu' => 'required|jpeg,png,jpg|max:2048',
            'slip_gaji' => 'required|jpeg,png,jpg|max:2048',
            'foto_depan' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_ruang_tamu' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_dapur' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);



        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }
}