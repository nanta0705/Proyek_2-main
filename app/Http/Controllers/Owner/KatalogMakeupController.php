<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Owner\KatalogMakeup;
use Illuminate\Http\Request;

class KatalogMakeupController extends Controller
{
    public function index()
    {
        $katalog_makeup = KatalogMakeup::all();
        return view('owner.katalog_makeup.index', compact('katalog_makeup'));
    }
}
