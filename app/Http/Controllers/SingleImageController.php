<?php

namespace App\Http\Controllers;

use App\SingleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SingleImageController extends Controller
{
    public function single_image_create()
    {
        return view('single_image_create');
    }

    public function single_image_store(Request $request)
    {
        $request->validate([
            'single_image_title' => 'required',
            'single_image' => 'required'.'|'.'mimes:jpeg,png,jpg',
        ]);

        $data['single_image_title'] = $request->single_image_title;
        $file = $request->file('single_image');
        $path_name = public_path('image/');
        $filename = time().'-'.Str::random(5).'-'.$file->getClientOriginalName();
        $file->move($path_name , $filename);
        $data['single_image'] = $path_name . $filename;
        SingleImage::create($data);
        return back();
    }
}
