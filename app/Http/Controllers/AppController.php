<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magang;
use App\Models\Berita; // Tambahkan baris ini untuk mengimpor model Berita

class AppController extends Controller
{
    public function magang()
    {
        return view('info-magang', ['artikels' => Magang::orderBy('id', 'desc')->get()]);
    }

    public function detail($slug)
    {
        $artikel = Magang::where('slug', $slug)->first();
        return view('detail-magang', ['artikel' => $artikel]);
    }

    public function berita()
    {
        return view('berita', ['beritas' => Berita::orderBy('id', 'desc')->get()]);
    }

    public function selengkapnya($slug)
    {
        $berita = Berita::where('slug', $slug)->first();
        return view('detail-berita', ['berita' => $berita]);
    }
}
