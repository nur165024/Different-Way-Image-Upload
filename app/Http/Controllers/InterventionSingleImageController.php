<?php

namespace App\Http\Controllers;

use App\InterventionSingleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class InterventionSingleImageController extends Controller
{
    public function intervention_single_image_create()
    {
        return view('intervention_single_image_create');
    }

    public function intervention_single_image_store(Request $request)
    {
        $request->validate([
            'intervention_single_image_title' => 'required',
            'intervention_single_image' => 'required'.'|'.'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('intervention_single_image');
        $imagepath = public_path('intervention/');
        $image_name = time().'-'.Str::random(5).'-'. $file->getClientOriginalName();

        $image_resize = Image::make($file->getRealPath());
        $image_resize->resize(600,null,function ($res) {
            $res->aspectRatio();
        })->save($imagepath . $image_name);

        $intervention_single = new InterventionSingleImage();
        $intervention_single->intervention_single_image_title = $request->intervention_single_image_title;
        $intervention_single->intervention_single_image = $imagepath . $image_name;
        $intervention_single->save();
        return back();
    }
}
