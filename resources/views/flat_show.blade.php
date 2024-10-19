<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали квартир.</title>
</head>
<body>

<h2>{{ $flat_show ? "Номер квартиры: " . $flat_show->apartment_number : "Упс! Вы ввели не верный ID." }}</h2>

@if($flat_show)
    <h3>Детали:</h3>
    <table border="1">
        <tr>
            <th>ID квартиры</th>
            <th>Номер</th>
            <th>Площадь</th>
            <th>Адрес</th>
        </tr>
        <tr>
            <td>{{ $flat_show->flat_id }}</td>
            <td>{{ $flat_show->apartment_number }}</td>
            <td>{{ $flat_show->area_of_the_apartment }}</td>
            <td>{{ $flat_show->house ? $flat_show->house->house_name : 'Дом не найден!' }}</td>
        </tr>
    </table>
@else
    <p>Для данного ID не было найдено ни одной квартиры.</p>
@endif

</body>
</html>
