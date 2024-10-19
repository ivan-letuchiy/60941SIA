<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return view('house_index', ['house_index' => House::all() ]);
    }

    public function show(string $house_id)
    {
        return view('house_show', ['house_show' => House::all()->where('house_id', $house_id)->first()]);
    }
}
