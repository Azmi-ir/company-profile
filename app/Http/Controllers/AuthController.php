<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check())
        {
            return redirect()->back()->with('info', 'silahkan logout untuk mengakases halaman login');
        }
        else{
           return view('admin.auth.login');
       }
    }    

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Email atau Password yang anda masukan salah/kosong');
    }

    public function register()
    {
        return view('admin.auth.daftar');
    }

    public function postregister (Request $request)
    {
        $this->validate($request, [
    'name' => 'required|unique:users|min:6',
    'email' => 'required|email|unique:users',
    'password' => 'required|min:8|confirmed'
    ]);
    
    User::create([
        'name' =>$request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        
        ]);

        return redirect('/admin/list-user')->with('status', 'User berhasil di tambahkan');;
     }

     public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    public function list_user()
    {
        $user = User::all();
        return view('admin.auth.list_user', compact('user'));
    }


    //-->Fungsi Edit User

    public function edit(User $User)
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);

            if ($user) {
            return view('admin.auth.edit')->withUser($user);
            } else {
            return redirect()->back();
            } 
        } else {
            return redirect()->back();
        } 

    }

    public function update(Request $request)
    {
       $user = User::find(Auth::user()->id);
        if ($user) {
            if (Auth::user()->email === $request['email']) {
            $validate = $request->validate([
                'name' => 'required|min:6',
                'email' =>'required|email'
                ]);
        
            } else {
                $validate = $request->validate([
                'name' => 'required|min:6',
                'email' =>'required|email|unique:users'
                ]);
            }

            $user->name = $request['name'];
            $user->email = $request['email'];

            $user->save();
        } else {
            return redirect()->back();
        }

        return redirect()->back()->with('status', 'Data berhasil di ubah');
    }


    //-->fungsi ganti password

    public function passwordEdit()
    {
        if (Auth::user()) {
            $user = User::find(Auth::user()->id);
            return view('admin.auth.passwordEdit')->withUser($user);    
        } else {
            return redirect()->back();
        }    
    }
    public function passwordUpdate(Request $request)
    {

        $validate = $request->validate([
                'oldpassword' => 'required|min:8',
                'password' =>'required|min:8',
                'password_confirmation' => 'same:password'
                ]);

        $user = User::find(Auth::user()->id);

        if ($user) {
            if (Hash::check($request['oldpassword'], $user->password) && $validate) {
                $user->password = Hash::make($request['password']);
                $user->save();
                $request->session();
                return redirect('admin/user/editpassword')->with('status', 'password berhasil di ubah');
            } else {
                $request->session();
                return redirect('admin/user/editpassword')->with('error', 'password yang anda masukan tidak cocok');
            }
        }
    }

   //--> Fungsi Delete User
     public function destroy()
    {
        $user = User::where(Auth()->user()->id);
        user::destroy(Auth()->user()->id);
        Auth::logout();
        return redirect('/login');
    }


}
