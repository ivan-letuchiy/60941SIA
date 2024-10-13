<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        // Получаем владельца с его вопросами и данными из таблицы голосования (pivot)
        $owner = Owner::with(['questions' => function ($query) {
            $query->withPivot('answer');
        }])->findOrFail($id);

        // Передаем данные в представление
        return view('owners.show', compact('owner'));
    }
}
