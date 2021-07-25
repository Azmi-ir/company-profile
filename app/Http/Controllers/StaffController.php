<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use File;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::orderBy('created_at', 'desc')->get();
        return view('admin.staff.index', compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
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
        'nama' => 'required|max:50',
        'jabatan' =>'required|max:50',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
    ]);
        $staff = new Staff();
        $staff->nama= $request->input('nama');
        $staff->jabatan = $request->input('jabatan');
        $staff->status = $request->input('status');
        $staff->deskripsi  = $request->input('deskripsi');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('foto_staff', $filename);
            $staff->foto = $filename;
            
        }

        $staff->save();
        return redirect('/admin/staff')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
         $request->validate([
        'nama' => 'required|max:50',
        'jabatan' =>'required|max:50',
        
        
    ]);
        $staff->nama= $request->input('nama');
        $staff->jabatan = $request->input('jabatan');
        $staff->status = $request->input('status');
        $staff->deskripsi  = $request->input('deskripsi');
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'.$extension;
            $file->move('foto_staff', $filename);
            $staff->foto = $filename;
            
        }

        $staff->save();
        return redirect('/admin/staff')->with('status', 'berita berhasil dibuat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        Staff::destroy($staff->id);
        File::delete('foto_staff/'.$staff->foto);
        return redirect()->back()->with('status', 'Data berhasil di hapus');
    }
}
