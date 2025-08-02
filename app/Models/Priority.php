<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Priority extends Model
{
    protected $table = 'priorities';

    protected $fillable = [
        'priority_name',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
