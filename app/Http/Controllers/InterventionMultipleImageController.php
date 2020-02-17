<?php

namespace App\Http\Controllers;

use App\InterventionMultipleImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class InterventionMultipleImageController extends Controller
{
    public function create()
    {
        return view('intervention_multiple_image_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'intervention_multiple_image_title' => 'required',
            'intervention_multiple_image.*' => 'required'.'|'.'mimes:jpeg,png,jpg',
        ]);

        $files = $request->file('intervention_multiple_image');
        foreach ($files as $file){
            $imagepath = public_path('multiple_image_upload/');
            $image_name = time().'-'.Str::random(5).$file->getClientOriginalName();
            $image_resize = Image::make($file->getRealPath());
            $image_resize->resize('600',null, function ($res){
                $res->aspectRatio();
            })->save($imagepath . $image_name);
        }

        $intervention_multiple_image = new InterventionMultipleImage();
        $intervention_multiple_image->intervention_multiple_image_title = $request->intervention_multiple_image_title;
        $intervention_multiple_image->intervention_multiple_image = $imagepath . $image_name;
        $intervention_multiple_image->save();
        return back();
    }
}
