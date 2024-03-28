<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home.index', [
            'title' => 'Anime Indo',
            'active' => 'home'
        ]);
    }

    public function jadwal_tayang()
    {
        return view('pages.home.jadwal-tayang', [
            'title' => 'Anime Indo - Jadwal Tayang',
            'active' => 'jadwal-tayang'
        ]);
    }

    public function katalog_anime()
    {
        return view('pages.home.katalog-anime', [
            'title' => 'Anime Indo - Katalog Anime',
            'active' => 'katalog-anime'
        ]);
    }

    public function riwayat_menonton()
    {
        return view('pages.home.riwayat-menonton', [
            'title' => 'Anime Indo - Riwayat Menonton',
            'active' => 'riwayat-menonton'
        ]);
    }

    public function subscribed_anime()
    {
        return view('pages.home.subscribed-anime', [
            'title' => 'Anime Indo - Subscribed Anime',
            'active' => 'subscribed-anime'
        ]);
    }

    public function pengaturan()
    {
        return view('pages.home.pengaturan', [
            'title' => 'Anime Indo - Pengaturan',
            'active' => 'pengaturan'
        ]);
    }

    public function tampilan()
    {
        return view('pages.home.tampilan', [
            'title' => 'Anime Indo - Tampilan',
            'active' => 'tampilan'
        ]);
    }

    public function pricing()
    {
        return view('pages.home.pricing', [
            'title' => 'Anime Indo - Pricing',
            'active' => 'pricing'
        ]);
    }
}
