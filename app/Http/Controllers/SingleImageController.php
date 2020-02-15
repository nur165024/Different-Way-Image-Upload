<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleImageController extends Controller
{
    public function single_image_create()
    {
        return view('single_image_create');
    }
}
