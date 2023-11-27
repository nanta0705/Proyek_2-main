<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\KatalogMakeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;


class KatalogMakeupController extends Controller
{
    public function index()
    {
        $katalog_makeup = KatalogMakeup::all();
        return view('owner.katalog_makeup.index', compact('katalog_makeup'));
    }

    // please make three function for store, update and delete

    // public function store(request $request)
    // {
    //     // dd($request->all());
    //     try {
    //         $request->validate([
    //             'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         ]);

    //         $ImageName = time() . '.' . $request->image->extention();

    //         $request->image->move(public_path('katalog_makeup_image'), $ImageName);

    //         KatalogMakeup::create([
    //             'name' => $request->nama,
    //             'description' => $request->description,
    //             'price' => $request->price,
    //             'image' => '/katalog_makeup_image' . $ImageName,
    //             'user_id' => Auth::user()->id,

    //         ]);

    //         Alert::success('Data Makeup Berhasil Ditambahkan');
    //         return back();
    //     } catch (\Exception $e) {
    //         Alert::error('Data Makeup Gagal Disimpan!' . $e->getmessage());
    //         return back();
    //     }
    // }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time() . '.' . $request->image->extension();

            $request->image->move(public_path('katalog_makeup_image'), $imageName);

            KatalogMakeup::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'image' => 'katalog_makeup_image/' . $imageName,
                'user_id' => Auth::user()->id,
            ]);
            Alert::success('Data Makeup Berhasil Ditambah');
            return back();
        } catch (\Exception $e) {
            Alert::error('Data Makeup Gagal Disimpan!' . $e->getmessage());
            return back();
        }
    }

    public function destroy($id)
    {
        try {
            $makeup = KatalogMakeup::where('id', $id)->first();
            $makeup->delete();

            Alert::success('Data Berhasil Dihapus');
            return back();
        } catch (\Exception $e) {
            Alert::error('Data Gagal Dihapus' . $e->getmessage());
            return back();
        }
    }
}
