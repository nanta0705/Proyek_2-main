<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Support\Str;


class DataOwnerController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view("admin.akun_owner.index", compact('user'));
    }

    public function store(Request $request)
    {
        try {
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
        } catch (\Exception $e) {
            return back()->with('error' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            User::where("id", $id)->update([
                'name' => $request->nama,
                'alamat' => $request->alamat,
                'no_tlp' => $request->no_telepon,
                'email' => $request->email,
            ]);
            Alert::success('yeay data berhasil');
            return back()->with('success');
        } catch (\Exception $e) {
            Alert::error('gagal update' . $e->getMessage());
            return back()->with('error');
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::where('id', $id)->first();
            $user->delete();
            Alert::success('data berhasil dihapus');
            return back()->with('success');
        } catch (\Exception $e) {
            Alert::error('yah gagal hapus' . $e->getMessage());
            return back()->with('error' . $e->getMessage());
        }
    }
}
