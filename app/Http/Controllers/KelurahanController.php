<?php
namespace App\Http\Controllers;

class KelurahanController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardk';

        return view('welcome', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function dashboardk()
    {
        $breadcrumb = (object) [
            'title' => 'Selamat Datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboardk';

        return view('kelurahan.dashboardk', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function informasik()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'informasik';

        return view('kelurahan.informasik', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaank()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaank';

        return view('kelurahan.laporanpenerimaank', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasik(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'validasik';

        return view('kelurahan.validasi', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function informasikdetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'informasikdetail';

        return view('informasik.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function laporanpenerimaankdetail()
    {
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'laporanpenerimaankdetail';

        return view('laporanpenerimaank.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
    public function validasikdetail(){
        $breadcrumb = (object) [
            'title' => '',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'validasikdetail';

        return view('validasik.show', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu]);
    }
}
