<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultipleFolderImageController extends Controller
{
    public function create()
    {
        return view('multiple_image_upload');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
