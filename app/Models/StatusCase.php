<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusCase extends Model
{
    protected $table = 'status_cases';

    protected $fillable = [
        'status_case_name',
        'state',
    ];

    public function caseLogs()
    {
        return $this->hasMany(CaseLog::class);
    }
}
