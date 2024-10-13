<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $table = 'houses';
    protected $primaryKey = 'house_id';

    public function flats(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Flat::class, 'house_id_for_flats', 'house_id');
    }

    public function meetings(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Meeting::class, 'house_id_for_meeting', 'house_id');
    }
}
