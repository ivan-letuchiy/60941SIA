<!-- resources/views/houses/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>House Details</title>
</head>
<body>
<h1>House: {{ $house->name }}</h1>

<h2>Flats in this house:</h2>
<ul>
    @foreach($house->flats as $flat)
        <li>Flat: {{ $flat->flat_number }}</li>
    @endforeach
</ul>

<h2>Meetings in this house:</h2>
<ul>
    @foreach($house->meetings as $meeting)
        <li>
            <a href="{{ route('meetings.show', $meeting->meeting_id) }}">Meeting ID: {{ $meeting->meeting_id }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
