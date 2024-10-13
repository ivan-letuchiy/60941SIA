<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionOfTheMeeting extends Model
{
    use HasFactory;

    protected $table = 'question_of_the_meeting';
    protected $primaryKey = 'question_of_the_meeting_id';

    public function meeting(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Meeting::class, 'meeting_id_for_question');
    }

    public function owners(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Owner::class, 'vote', 'question_id_for_vote', 'owner_id_for_vote')
            ->withTimestamps() // Добавляет поддержку временных меток в связующей таблице
            ->withPivot('answer'); // Это нужно, чтобы получить данные о голосовании (ответ)
    }
}
