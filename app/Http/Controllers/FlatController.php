<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('flat_index', ['flat_index' => Flat::all()]);
    }

    public function show(string $flat_id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        return view('flat_show', ['flat_show' => Flat::all()->where('flat_id', $flat_id)->first()]);
    }
}
