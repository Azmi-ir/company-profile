<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use App\Models\Portofolio;
use App\Models\Testimoni;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Staff;

class FrontendController extends Controller
{
    public function index()
    {
        $profil     = Profil::first();
        $layanan    = Layanan::where('status', '1')->orderBy('created_at', 'desc')->get();
        $staff      = Staff::where('status', '1')->orderBy('created_at', 'desc')->get();
        $portofolio = Portofolio::where('status', '1')->orderBy('created_at', 'desc')->get();
        $testimoni  = Testimoni::where('status', '1')->orderBy('created_at', 'desc')->get();
        $berita     = Berita::orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('layanan', 'portofolio', 'testimoni', 'berita', 'profil', 'staff'));
    }

    public function lihatLayanan($id, $nama_layanan)
    {
        $layanan  = Layanan::find($id);
        $layanan2 = Layanan::find($nama_layanan);
        $profil   = Profil::first();
        $listLayanan    = Layanan::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();

        if ($layanan->status == '1') {
            return view("frontend.layanan", compact('layanan', 'layanan2', 'profil', 'listLayanan'));
        } else {
            return redirect()->back();
        }
    }

    public function lihatPortofolio($id, $judul)
    {
        $portofolio   = Portofolio::find($id);
        $portofolio2  = Portofolio::find($judul);
        $profil       = Profil::first();
        $lsitPortofolio = Portofolio::where('status', '1')->inRandomOrder()->limit(4)->get();

        if ($portofolio->status == '1') {
            return view("frontend.portofolio", compact('portofolio', 'portofolio2', 'profil', 'lsitPortofolio'));
        } else {
            return redirect()->back();
        }
    }

    public function lihatBerita($id, $judul_berita)
    {
        $berita   = Berita::find($id);
        $berita2  = Berita::find($judul_berita);
        $profil   = Profil::first();
        $listBerita     = Berita::orderBy('created_at', 'desc')->limit(4)->get();

        return view("frontend.berita", compact('berita', 'berita2', 'profil', 'listBerita'));
    }
}
