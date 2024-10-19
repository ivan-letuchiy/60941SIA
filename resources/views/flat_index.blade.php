<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Данные о квартирах.</title>
</head>
<body>
<h2>Список квартир с указание площади:</h2>
<table border="1">
    <thead>
    <tr>
        <th>Номер квартиры:</th>
        <th>Площадь:</th>
        <th>ID:</th>
    </tr>
    </thead>
    <tbody>
    @foreach($flat_index as $flat)
        <tr>
            <td>{{$flat->apartment_number}}</td>
            <td>{{$flat->area_of_the_apartment}}</td>
            <td>{{$flat->flat_id}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
