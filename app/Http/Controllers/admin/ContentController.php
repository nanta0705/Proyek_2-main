<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        return view("admin.content.index");
    }

    public function store(Request $request)
    {
    }
}
