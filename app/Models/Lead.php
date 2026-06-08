<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Lead extends Model
{
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
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
