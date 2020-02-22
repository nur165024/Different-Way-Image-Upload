<?php

namespace App\Http\Controllers;

use App\MultipleFolderImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class MultipleFolderImageController extends Controller
{
    public function create()
    {
        return view('multiple_image_upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_title' => 'required',
            'image' => 'required'.'|'.'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('image');
        $file_thumline_path = public_path('multiple_folder_image_upload/thumline/');
        $image_name = time().'-'.Str::random(5).'-'.$file->getClientOriginalName();

        $image_resize = Image::make($file->getRealPath());
        $image_resize->resize(500,null, function ($res){
            $res->aspectRatio();
        })->save($file_thumline_path . $image_name);

        $file_main_path = public_path('multiple_folder_image_upload/main_image/');
        $file->move($file_main_path , $image_name);

        $multiple_folder_image_upload = new MultipleFolderImage();
        $multiple_folder_image_upload->image_title = $request->image_title;
        $multiple_folder_image_upload->image = $request->image;
        $multiple_folder_image_upload->save();
        return back();
    }
}
