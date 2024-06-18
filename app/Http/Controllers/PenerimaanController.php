<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['laporan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrw';
        $laporanpenerimaan = Data::with('jenisBansos')->paginate(10);
        return view('rw.laporanpenerimaanrw', [
            'breadcrumb' => $breadcrumb,
            'activeMenu' => $activeMenu,
            'laporanpenerimaan' => $laporanpenerimaan
        ]);
    }
}