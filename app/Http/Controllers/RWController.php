<?php
namespace App\Http\Controllers;
use App\Models\Entry;

class RWController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrw';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function dashboardrw()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardrw';

        return view('rw.dashboardrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function datapengajuan(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';

        return view('rw.datapengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuanrw';

        return view('rw.laporanpengajuanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrw';

        return view('rw.laporanpenerimaanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Validasi', 'Welcome']
        ];

        $activeMenu = 'validasi';

        return view('rw.validasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function datapengajuandetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Pengajuan', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';

        return view('datapengajuan.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasidetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Validasi', 'Welcome']
        ];

        $activeMenu = 'validasidetail';

        return view('rw.validasi.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function delete()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'delete';

        return view('rw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuanrwdetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Pengajuan', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuanrwdetail';

        return view('rw.laporanpengajuanrw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaanrwdetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Laporan Penerimaan', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrwdetail';

        return view('rw.laporanpenerimaanrw.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }

    public function aras(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Aras', 'Welcome']
        ];

        $activeMenu = 'aras';

        return view('rw.aras', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
