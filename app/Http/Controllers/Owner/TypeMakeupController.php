<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\TypeMakeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TypeMakeupController extends Controller
{
    public function index()
    {

        $user = Auth::user()->id;

        $type = TypeMakeup::where('user_id', $user)->get();
        return view('owner.type_makeup.index', compact('type'));
    }

    public function store(Request $request)
    {
        try {
            $user = Auth::user()->id;
            TypeMakeup::create([
                'name' => $request->name,
                'user_id' => $user,
            ]);
            Alert::success('Data Type Makeup Berhasil Ditambah');
            return back();
        } catch (\Exception $e) {
            Alert::error('Data Type Makeup Gagal Disimpan!' . $e);
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        try {
            TypeMakeup::where("id", $id)->update([
                'name' => $request->name,
            ]);

            Alert::success('Data berhasil diupdate');
            return back();
        } catch (\Exception $e) {
            Alert::error('Data gagal diupdate!' . $e);
            return back();
        }
    }

    public function destroy($id)
    {
        try {
            $makeup = TypeMakeup::where('id', $id)->first();
            $makeup->delete();

            Alert::success('Data Berhasil Dihapus');
            return back();
        } catch (\Exception $e) {
            Alert::error('Data gagal dihapus!' . $e->getMessage());
            return back();
        }
    }
}
