<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function show(string $owner_id)
    {
        return view('owner_show', ['owner_show' => Owner::all()->where('owner_id', $owner_id)->first()]);
    }
}
