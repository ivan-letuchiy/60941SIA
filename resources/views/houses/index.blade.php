<!-- resources/views/houses/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Houses</title>
</head>
<body>
<h1>List of Houses</h1>
<ul>
    @foreach($houses as $house)
        <li>
            <a href="{{ route('houses.show', $house->house_id) }}">{{ $house->name }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
