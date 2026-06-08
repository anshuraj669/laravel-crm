<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Deals extends Model
{
    public function customer():BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function tasks():MorphMany
    {
        return $this->morphMany(Task::class, 'taskable');
    }

    public function notes():MorphMany
    {
        return $this->morphMany(Note::class, 'noteable');
    }
}
