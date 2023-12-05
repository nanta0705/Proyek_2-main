<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\KatalogMakeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;


class KatalogMakeupController extends Controller
{
    public function index()
    {
        $katalog_makeup = KatalogMakeup::all();
        return view('owner.katalog_makeup.index', compact('katalog_makeup'));
    }


    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $makeup = KatalogMakeup::findOrFail($id);
            $makeup->name = $request->name;
            $makeup->description = $request->description;
            $makeup->price = $request->price;

            if ($request->hasFile('image')) {
                // Hapus gambar lama jika ada
                if (File::exists(public_path($makeup->image))) {
                    File::delete(public_path($makeup->image));
                }

                // upload gambar baru
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('katalog_makeup_images'), $imageName);
                $makeup->image = 'katalog_makeup_image/' . $imageName;
            }

            $makeup->save();

            Alert::success('Data Berhasil Diubah');
            return back();
        } catch (\Exception $e) {

            Alert::error('Data Gagal Diubah!' . $e->getMessage());
            return back();
        }
    }

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
