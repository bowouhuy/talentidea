<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userimages;
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
        // dd($request->mitra);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);

        if(isset($request->mitra)){
            $role=2;
            $request->validate(['file' => 'required']) ;
            $image = $request->file('file');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('images/user_image'),$filename);
            $user_st='0';
        }else{
            $role=1;
            $filename = '';
            $user_st='1';
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'email' => $request->email,
            'user_st' => $user_st,
            'password' => Hash::make($request->password),
            'register_tanggal' => \Carbon\Carbon::now(), # new \Datetime()
            'role' => $role
        ]);

        if ($filename){
            $user_image = Userimages::create([
                'user_id' => $user->id,
                'filename' => $filename,
                'url' => $filename,
            ]);
        }
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
            if (Auth::user()->user_st === '1'){
                //Login Success
                Session::flash('success', 'Berhasil Login');
                // dd(Auth::user()->role);
                if (Auth::user()->role ===2){
                    return redirect('/mitra');
                }else if(Auth::user()->role ===0){
                    return redirect('/admin');
                }
                else if(substr(session('link'), -8) === "register"){
                    return redirect('/');
                }
                else if(substr(session('link'), -5) === "login"){
                    return redirect('/');
                }
                else{
                    // return redirect(session('link'));
                    return redirect('/');
                }
            } else {
                //Login Fail
                Session::flash('error', 'Akun Belum di verifikasi');
                return redirect('/login');
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
