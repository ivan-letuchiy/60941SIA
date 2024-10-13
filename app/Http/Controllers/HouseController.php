<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    // Метод для отображения списка домов
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $houses = House::with('flats', 'meetings')->get();
        return view('houses.index', compact('houses'));
    }

    // Метод для отображения информации о конкретном доме
    public function show($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $house = House::with('flats', 'meetings')->findOrFail($id);
        return view('houses.show', compact('house'));
    }
}
