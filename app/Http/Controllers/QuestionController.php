<?php

namespace App\Http\Controllers;

use App\Models\QuestionOfTheMeeting;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function show($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        // Получаем вопрос собрания с владельцами и данными о голосовании (pivot)
        $question = QuestionOfTheMeeting::with(['owners' => function ($query) {
            $query->withPivot('answer');
        }])->findOrFail($id);

        // Передаем данные в представление
        return view('questions.show', compact('question'));
    }
}
