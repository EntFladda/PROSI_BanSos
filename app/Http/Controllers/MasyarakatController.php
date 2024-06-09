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
            'list' => ['Informasi', 'Welcome']
        ];

        $activeMenu = 'informasi';

        return view('masyarakat.informasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function konfirmasi(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Konfirmasi', 'Welcome']
        ];

        $activeMenu = 'konfirmasi';

        return view('masyarakat.konfirmasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function pengajuanm(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Pengajuan', 'Welcome']
        ];

        $activeMenu = 'pengajuanm';

        return view('form', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function informasidetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Informasi', 'Welcome']
        ];

        $activeMenu = 'informasidetail';

        return view('masyarakat.informasim.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function konfirmasidetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Detail Konfirmasi', 'Welcome']
        ];

        $activeMenu = 'konfirmasidetail';

        return view('masyarakat.konfirmasi.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}