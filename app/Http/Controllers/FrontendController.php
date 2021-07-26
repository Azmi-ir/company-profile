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
        $layanan    = Layanan::where('status', '1')->orderBy('created_at', 'desc')->take(8)->get();
        $staff      = Staff::where('status', '1')->orderBy('created_at', 'desc')->take(8)->get();
        $portofolio = Portofolio::where('status', '1')->orderBy('created_at', 'desc')->take(6)->get();
        $testimoni  = Testimoni::where('status', '1')->orderBy('created_at', 'desc')->take(5)->get();
        $berita     = Berita::orderBy('created_at', 'desc')->take(6)->get();
        return view('frontend.index', compact('layanan', 'portofolio', 'testimoni', 'berita', 'profil', 'staff'));
    }

    public function lihatLayanan($id)
    {
        $layanan  = Layanan::find($id);
        $profil   = Profil::first();
        $listLayanan    = Layanan::where('status', '1')->orderBy('created_at', 'desc')->limit(4)->get();

        if ($layanan->status == '1') {
            return view("frontend.layanan", compact('layanan', 'profil', 'listLayanan'));
        } else {
            return redirect()->back();
        }
    }

    public function lihatPortofolio($id)
    {
        $portofolio   = Portofolio::find($id);
        $profil       = Profil::first();
        $lsitPortofolio = Portofolio::where('status', '1')->inRandomOrder()->limit(4)->get();

        if ($portofolio->status == '1') {
            return view("frontend.portofolio", compact('portofolio', 'profil', 'lsitPortofolio'));
        } else {
            return redirect()->back();
        }
    }

    public function lihatBerita($id)
    {
        Berita::find($id)->increment('views');
        $berita   = Berita::find($id);
        $profil   = Profil::first();
        $listBerita     = Berita::orderBy('created_at', 'desc')->limit(4)->get();

        return view("frontend.berita", compact('berita', 'profil', 'listBerita'));
    }
}
