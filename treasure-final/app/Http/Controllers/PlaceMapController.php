<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

class PlaceMapController extends Controller
{
    public function index()
    {
        return view('places.map2');
        // $places = Place::all();
        // return view('places.map', compact('places'));
    }
}
