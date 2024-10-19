<?php

namespace App\Http\Controllers;

use App\Models\QuestionOfTheMeeting;
use Illuminate\Http\Request;

class QuestionOfTheMeetingController extends Controller
{
    public function show(string $question_of_the_meeting_id)
    {
        return view('questionOfTheMeeting_show', ['questionOfTheMeeting_show' => QuestionOfTheMeeting::all()->where('question_of_the_meeting_id', $question_of_the_meeting_id)->first()]);
    }
}
