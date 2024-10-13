@extends('layouts.app')

@section('content')
    <h1>Owner: {{ $owner->name }}</h1>

    <h2>Questions and Votes:</h2>
    <ul>
        @foreach($owner->questions as $question)
            <li>
                <strong>Question:</strong> {{ $question->question_text }}<br>
                <strong>Answer:</strong> {{ $question->pivot->answer }} <!-- answer из связующей таблицы -->
            </li>
        @endforeach
    </ul>
@endsection

