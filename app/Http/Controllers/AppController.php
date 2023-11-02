<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }

    public function owner()
    {
        return view('owner.dashboard');
    }

    public function client()
    {
        return view('client.dashboard');
    }
}
