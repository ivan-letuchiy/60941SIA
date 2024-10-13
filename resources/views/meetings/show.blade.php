<!-- resources/views/meetings/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Meeting Details</title>
</head>
<body>
<h1>Meeting ID: {{ $meeting->meeting_id }}</h1>

<h2>Questions for this meeting:</h2>
<ul>
    @foreach($meeting->questions as $question)
        <li>Question: {{ $question->question_text }}</li>
    @endforeach
</ul>

<h2>House of this meeting:</h2>
<p>House: {{ $meeting->house->name }}</p>
</body>
</html>
