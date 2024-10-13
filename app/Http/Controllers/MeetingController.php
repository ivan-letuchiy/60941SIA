<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    // Метод для отображения списка встреч
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $meetings = Meeting::with('questions')->get();
        return view('meetings.index', compact('meetings'));
    }

    // Метод для отображения информации о конкретной встрече
    public function show($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $meeting = Meeting::with('questions')->findOrFail($id);
        return view('meetings.show', compact('meeting'));
    }
}
