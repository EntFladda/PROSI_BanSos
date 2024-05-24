<?php
namespace App\Http\Controllers;

class MasyarakatController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardm';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function dashboardm()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardm';

        return view('masyarakat.dashboardm', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function informasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'informasi';

        return view('masyarakat.informasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function konfirmasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'konfirmasi';

        return view('masyarakat.konfirmasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function pengajuanm(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'pengajuanm';

        return view('masyarakat.pengajuan', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
