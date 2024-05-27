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
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'datapengajuan';

        return view('rw.datapengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpengajuanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'laporanpengajuanrw';

        return view('rw.laporanpengajuanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaanrw(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaanrw';

        return view('rw.laporanpenerimaanrw', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'validasi';

        return view('rw.validasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function datapengajuandetail($id)
{
    $entry = Entry::findOrFail($id); // Fetch the entry by ID
    
    // Define the page data
    $page = (object) [
        'title' => 'Detail Pengajuan Bansos'
    ];

    return view('datapengajuan.show', ['page' => $page, 'entry' => $entry]); // Pass the 'page' and 'entry' variables to the view
}

}
