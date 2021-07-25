<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;
use Mail;

class PesanController extends Controller
{
     public function kirimPesan(Request $request, Pesan $pesan)
    {
        
        //$this->validate($request, []);

        $request->validate([
            'nama'   => 'required|max:40',
            'email'  => 'required|email',
            'subjek' => 'required|max:40',
            'pesan'  => 'required',
            
         ]);
        Pesan::create($request->all());

        return redirect('/');
    }

    public function index()
    {
        $pesan = Pesan::orderBy('created_at', 'desc')->get();
        return view('admin.pesan.index', compact('pesan'));
    }

    public function lihatPesan($id, Pesan $pesan)
    {
        $detail_pesan = Pesan::find($id);
        return view('admin.pesan.lihat', compact('detail_pesan', 'pesan'));
    }

    public function balasPesan($id, Pesan $pesan)
    {
        $detail_pesan = Pesan::find($id);
        return view('admin.pesan.balas', compact('detail_pesan', 'pesan'));
    }

    public function kirimBalasan(Request $request, Pesan $pesan)
    {

        Mail::send('pesan.pesan', array(
            'email'   => $request->get('email'),
            'nama'    => $request->get('nama'),
            'subject'  => $request->get('subjek'),
            'pesan' => $request->get('pesan'),
            
        ), function($message)use ($request, $pesan)
        {
            $detail_pesan = Pesan::find($pesan->id);
            if ($request->filled('tembusan')) {
            $message->to($request->get('email'))
                    ->cc($request->get('tembusan'))
                    ->subject($request->get('subjek'));
            }
            else{
                 $message->to($request->get('email'))
                    ->subject($request->get('subjek'));
            }
        });


        return redirect('/admin/pesan-masuk')->with('status', 'Pesan Balasan Terkirim');
    }

    public function destroy($id,Pesan $pesan)
    {
        $pesan = Pesan::find($id);
        Pesan::destroy($pesan->id);
        File::delete('file_pesan/'.$pesan->file);
        return redirect('/admin/pesan-masuk')->with('status', 'Data berhasil di hapus');
    }

    public function update(Request $request, $id)
    {
        $pesan = Pesan::find($id);
        $pesan->status = $request->input('status');
        $pesan->save();
        return redirect()->back()->with('status', 'Status berhasil diubah');
    }
}
