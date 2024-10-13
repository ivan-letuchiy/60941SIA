<!-- resources/views/meetings/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Meetings</title>
</head>
<body>
<h1>List of Meetings</h1>
<ul>
    @foreach($meetings as $meeting)
        <li>
            <a href="{{ route('meetings.show', $meeting->meeting_id) }}">Meeting ID: {{ $meeting->meeting_id }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
