<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали домов</title>
</head>
<body>

<h2>{{ $house_show ? "Информация о доме: " . $house_show->house_name : "Упс! Вы ввели не верный ID." }}</h2>

@if($house_show)
    <h3>Сведения о квартирах в этом доме:</h3>
    <table border="1">
        <tr>
            <th>ID квартиры</th>
            <th>Номер квартиры</th>
            <th>Площадь квартиры</th>
        </tr>
        @foreach($house_show->flats as $flat)
            <tr>
                <td>{{ $flat->flat_id }}</td>
                <td>{{ $flat->apartment_number }}</td>
                <td>{{ $flat->area_of_the_apartment }}</td>
            </tr>
        @endforeach
    </table>
@else
    <p> По указанному ID дом не найден.</p>
@endif

</body>
</html>
