<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    protected $table = 'department';

    protected $fillable = ['name'];

    public function designations(): HasMany
    {
        return $this->hasMany(Designation::class);
    }
}
