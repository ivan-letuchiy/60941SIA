<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали о владельцах</title>
</head>
<body>

<h2>{{ $owner_show ? "Владелец: " . $owner_show->full_name : 'Упс! Вы ввели не верный ID.'}}</h2>

@if($owner_show)
    <h3>Информация о владельце:</h3>
    <table border="1">
        <tr>
            <th>ID владельца</th>
            <th>ФИО</th>
            <th>ID квартиры</th>
            <th>Доля в праве</th>
        </tr>
        <tr>
            <td>{{ $owner_show->owner_id }}</td>
            <td>{{ $owner_show->full_name }}</td>
            <td>{{ $owner_show->flat_id_for_owners }}</td>
            <td>{{ $owner_show->ownership_interest }}%</td>
        </tr>
    </table>

    <h3>История ответов на вопросы голосования:</h3>
    @if($owner_show->questions->isEmpty())
        <p>Не нашлось ни одной записи ответов у этого владельца.</p>
    @else
        <table border="1">
            <tr>
                <th>ID вопроса</th>
                <th>Вопрос</th>
                <th>Ответ</th>
            </tr>
            @foreach($owner_show->questions as $question)
                <tr>
                    <td>{{ $question->question_of_the_meeting_id }}</td>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->pivot->answer }}</td> <!-- Используем pivot для доступа к полю "answer" -->
                </tr>
            @endforeach
        </table>
    @endif
@else
    <p>По данному ID не найден ни один владелец.</p>
@endif

</body>
</html>
