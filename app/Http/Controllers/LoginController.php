<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('autentikasi.login');
    }
    public function login(Request $request)
    {
        $user = User::where("username", $request->username)->first();


        if (!$user) {
            return back();
        }
        if (!Hash::check($request->password, $user->password)) {
            return back()->withError('hallo');
        }
        if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
            $request->session()->regenerate();

            if ($user->role_id == 1) {
                return redirect("/admin/dashboard")->withSuccess('Selamat Anda Berhasil Login, Selamat Datang ' . Auth::user()->name);
            }
        } else {
            return back()->withError('error');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect ('/login');
    }
}
