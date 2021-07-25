<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni=Testimoni::orderBy('created_at', 'desc')->get();
        return view('admin.testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimoni.create');
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
        'nama' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'testimoni' => 'required'
    ]);
        $testimoni = new Testimoni();
        $testimoni->nama= $request->input('nama');
        $testimoni->keterangan = $request->input('keterangan');
        $testimoni->status = $request->input('status');
        $testimoni->testimoni  = $request->input('testimoni');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_testimoni', $filename);
            $testimoni->gambar = $filename;
            
        }

        $testimoni->save();
        return redirect('/admin/testimoni')->with('status', 'Data berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        return view('admin.testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $request->validate([
        'nama' => 'required',
        'gambar' => 'image',
        'testimoni' => 'required'
    ]);

        $testimoni->nama= $request->input('nama');
        $testimoni->keterangan = $request->input('keterangan');
        $testimoni->status = $request->input('status');
        $testimoni->testimoni  = $request->input('testimoni');
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('gambar_testimoni', $filename);
            $testimoni->gambar = $filename;
            
        }

        $testimoni->save();
        return redirect('/admin/testimoni')->with('status', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        Testimoni::destroy($testimoni->id);
        File::delete('gambar_testimoni/'.$testimoni->gambar);

        return redirect()->back()->with('status', 'Data berhasil dihapus');
    }
}
