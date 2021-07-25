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
    public function index() {
        $profil     = Profil::first();
        $layanan    = Layanan::where('status', '1')->orderBy('created_at', 'desc')->get();
        $staff      = Staff::where('status', '1')->orderBy('created_at', 'desc')->get();
        $portofolio = Portofolio::where('status', '1')->orderBy('created_at', 'desc')->get();
        $testimoni  = Testimoni::where('status', '1')->orderBy('created_at', 'desc')->get();
        $berita     = Berita::orderBy('created_at', 'desc')->get();
        return view('frontend.index', compact('layanan', 'portofolio', 'testimoni', 'berita', 'profil', 'staff'));
    }
}
