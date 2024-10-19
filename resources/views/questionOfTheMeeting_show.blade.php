<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Детали о вопросах собрания</title>
</head>
<body>

<h2>{{ $questionOfTheMeeting_show ? "Вопрос собрания: " . $questionOfTheMeeting_show->question : "Упс! Вы ввели не верный ID." }}</h2>

@if($questionOfTheMeeting_show)
    <h3>Детали:</h3>
    <table border="1">
        <tr>
            <th>ID вопроса</th>
            <th>Вопрос</th>
            <th>ID встречи</th>
        </tr>
        <tr>
            <td>{{ $questionOfTheMeeting_show->question_of_the_meeting_id }}</td>
            <td>{{ $questionOfTheMeeting_show->question }}</td>
            <td>{{ $questionOfTheMeeting_show->meeting_id_for_question }}</td>
        </tr>
    </table>

    <h3>Решение голосования:</h3>
    @if($questionOfTheMeeting_show->owners->isEmpty())
        <p>Для данного вопроса собрания нет никаких решений.</p>
    @else
        <table border="1">
            <tr>
                <th>ID владельца</th>
                <th>ФИО</th>
                <th>Ответ</th>
            </tr>
            @foreach($questionOfTheMeeting_show->owners as $owner)
                <tr>
                    <td>{{ $owner->owner_id }}</td>
                    <td>{{ $owner->full_name }}</td>
                    <td>{{ $owner->pivot->answer }}</td> <!-- Используем pivot для доступа к полю "answer" -->
                </tr>
            @endforeach
        </table>
    @endif
@else
    <p>По указанному ID не найден ни один вопрос.</p>
@endif

</body>
</html>
