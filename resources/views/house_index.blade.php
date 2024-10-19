<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список домов.</title>
</head>
<body>
<h2>Список домов:</h2>
<table border="1">
    <thead>
    <tr>
        <th>Адрес дома:</th>
        <th>ID:</th>
    </tr>
    </thead>
    <tbody>
    @foreach($house_index as $house)
        <tr>
            <td>{{$house->house_name}}</td>
            <td>{{$house->house_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
