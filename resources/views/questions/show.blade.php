@extends('layouts.app')

@section('content')
    <h1>Question: {{ $question->question_text }}</h1>

    <h2>Owners and Their Votes:</h2>
    <ul>
        @foreach($question->owners as $owner)
            <li>
                <strong>Owner:</strong> {{ $owner->name }}<br>
                <strong>Answer:</strong> {{ $owner->pivot->answer }} <!-- answer из связующей таблицы -->
            </li>
        @endforeach
    </ul>
@endsection
