<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    use HasFactory;

    protected $table = 'flats';
    protected $primaryKey = 'flat_id';

    public function house(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(House::class, 'house_id_for_flats', 'house_id');
    }

    public function owners(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Owner::class, 'flat_id_for_owners', 'flat_id');
    }
}
