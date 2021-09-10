<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;

class AuthController extends Controller
{

    public function login() {
        session(['link' => url()->previous()]);
        return view('login');
    }

    public function register() {
        return view('register');
    }

    public function createUser(Request $request){
        $request->validate([
            'first_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'register_tanggal' => \Carbon\Carbon::now(), # new \Datetime()
        ]);
        return redirect('/login')
        ->with('success', 'Project created successfully.');
    }

    public function loginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $data = [
            'username'     => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            Session::flash('success', 'Berhasil Login');
            if(substr(session('link'), -8) === "register"){
                return redirect('/');
            }else{
                return redirect(session('link'));
            }
  
        } else { // false
  
            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect('login');
    }
}
