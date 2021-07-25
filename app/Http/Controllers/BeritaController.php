<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use File;
class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita=Berita::orderBy('created_at', 'desc')->get();
        return view('admin.berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'judul_berita' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'isi_berita' => 'required'
    ]);
        $berita = new Berita();
        $berita->judul_berita= $request->input('judul_berita');
        $berita->publisher = $request->input('publisher');
        $berita->isi_berita  = $request->input('isi_berita');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_berita', $filename);
            $berita->gambar = $filename;
            
        }

        $berita->save();
        return redirect('/admin/berita')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Berita $berita)
    {
        $berita=Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, Berita $berita)
    {
        $berita=Berita::find($id);
        $berita->judul_berita= $request->input('judul_berita');
        $berita->isi_berita  = $request->input('isi_berita');
        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_berita', $filename);
            $berita->gambar = $filename;
            
        }

        $berita->save();
        return redirect('/admin/berita')->with('status', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Berita $berita)
    {
        $tabel_berita = Berita::where('id',$id)->first();
        File::delete('gambar_berita/'.$tabel_berita->gambar);
        Berita::where('id',$id)->delete();
        return redirect('/admin/berita')->with('status', 'Data berhasil di hapus');
    }
}
