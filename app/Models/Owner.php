<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    protected $table = 'owners';
    protected $primaryKey = 'owner_id';

    public function flats(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Flat::class, 'flat_id_for_owners', 'owner_id', 'flat_id');
    }

    public function questions(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(QuestionOfTheMeeting::class, 'vote', 'owner_id_for_vote', 'question_id_for_vote')
            ->withTimestamps() // Добавляет поддержку временных меток в связующей таблице
            ->withPivot('answer'); // Это нужно, чтобы получить данные о голосовании (ответ)
    }
}
