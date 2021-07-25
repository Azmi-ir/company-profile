<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use File;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portofolio = Portofolio::orderBy('created_at', 'desc')->get();
        return view('admin.portofolio.index', compact('portofolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portofolio.create');
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
        'judul' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi' => 'required'
    ]);
        $portofolio = new Portofolio();
        $portofolio->judul= $request->input('judul');
        $portofolio->status = $request->input('status');
        $portofolio->deskripsi  = $request->input('deskripsi');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_portofolio', $filename);
            $portofolio->gambar = $filename;
            
        }

        $portofolio->save();
        return redirect('/admin/portofolio')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portofolio $portofolio)
    {
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portofolio $portofolio)
    {

        $portofolio->judul= $request->input('judul');
        $portofolio->deskripsi  = $request->input('deskripsi');
        $portofolio->status = $request->input('status');
        

        
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_portofolio', $filename);
            $portofolio->gambar = $filename;
            
        }

        $portofolio->save();
        return redirect('/admin/portofolio')->with('status', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portofolio  $portofolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portofolio $portofolio)
    {
        Portofolio::destroy($portofolio->id);
        File::delete('gambar_portofolio/'.$portofolio->gambar);
        return redirect()->back()->with('status', 'Data berhasil di hapus');
    }
    
}
