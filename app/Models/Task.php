<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = [
        'priority_id',
        'status_task_id',
        'task_name',
        'start_date',
        'end_date',
        'due_date',
    ];

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function statusCase()
    {
        return $this->belongsTo(StatusTask::class);
    }
}
