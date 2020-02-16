<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterventionMultipleImageController extends Controller
{
    public function create()
    {
        return view('intervention_multiple_image_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'intervention_single_image_title' => 'required',
            'intervention_single_image' => 'required'.'|'.'mimes:jpeg,png,jpg',
        ]);
    }
}
