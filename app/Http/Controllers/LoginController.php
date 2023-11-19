<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
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
            // dd($user);
            $request->session()->regenerate();

            if ($user->role == 'admin') {
                return redirect("/admin/dashboard")->withSuccess('Selamat Anda Berhasil Login, Selamat Datang ' . Auth::user()->name);
            } else if ($user->role == 'owner') {
                return redirect("/owner/dashboard")->withsuccess('selamat anda berhasil login, selmat datang' . Auth::user()->name);
            } else if ($user->role == 'client') {
                return redirect("/client/dashboard")->withsuccess('selamat anda berhasil login, selamat datang' . Auth::user()->name);
            }
        } else {
            return back()->withError('error');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
