<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DataClientController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view ('admin.akun_client.index', compact('user'));
    }

    public function store(Request $request){
        try{
            User::create([
                'name' => $request->nama,
                'username' => str::slug($request->nama),
                'email' => $request->email,
                'password' => bcrypt('password'),
                'no_tlp' => $request->no_telepon,
                'alamat' => $request->alamat,
                'role_id' => '3',

            ]);
            return back()->with('success');
        } catch (\Exception $e){
            return back()->with('error'.$e->getMessage());
        }
    }
    

}
