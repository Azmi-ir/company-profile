<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function profil()
    {
        $profil = Profil::first();
        return view('admin.profil.index', compact('profil'));
    }


    public function updateProfil(Request $request, Profil $profil)
    {
        $request->validate([
            'alamat' => 'max:100',
            'telpon' => 'max:30',
            'email' => 'max:100',
            'facebook' => 'max:100',
            'instagram' => 'max:100',
        ]);
        $profil = Profil::first();
        $profil->alamat = $request->input('alamat');
        $profil->telpon = $request->input('telpon');
        $profil->email = $request->input('email');
        $profil->facebook = $request->input('facebook');
        $profil->instagram = $request->input('instagram');
        
        $profil->save();

        return redirect()->back()->with('status','berhasil mengganti profil instansi');
    
    }
}
