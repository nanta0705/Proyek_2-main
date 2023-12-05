<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function index()
    {
        return view('regis.register');
    }
    public function store(Request $request)
    {
        try {
            User::create([
                'name' => $request->name,
                'username' => str::slug($request->name),
                'email' => $request->email,
                'password' => $request->password,
                'no_tlp' => $request->no_tlp,
                'alamat' => $request->alamat,
                'role_id' => '3',
            ]);
            Alert::success('berhasil mendaftar');
            return redirect('/login')->with('success');
        } catch (\Exception $e) {
            Alert::error($e->getMessage());
            return back()->with('error' . $e->getMessage());
        }
    }
}
