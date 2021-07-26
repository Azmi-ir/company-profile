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

        if ($layanan->status == '1') {
            return redirect()->back();
        } else {
            return view("", compact('layanan', 'layanan2', 'profil'));
        }
    }

    public function lihatPortofolio($id, $judul)
    {
        $portofolio   = Portofolio::find($id);
        $portofolio2  = Portofolio::find($judul);
        $profil       = Profil::first();

        if ($portofolio->status == '1') {
            return redirect()->back();
        } else {
            return view("", compact('portofolio', 'portofolio2', 'profil'));
        }
    }

    public function lihatBerita($id, $judul_berita)
    {
        $berita   = Berita::find($id);
        $berita2  = Berita::find($judul_berita);
        $profil   = Profil::first();

        return view("", compact('berita', 'berita2', 'profil'));
    }
}
