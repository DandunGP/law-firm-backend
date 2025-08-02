<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseLog extends Model
{
    protected $table = 'case_logs';

    protected $fillable = [
        'legal_case_id',
        'from_status',
        'to_status',
    ];

    public function legalCase()
    {
        return $this->belongsTo(LegalCase::class);
    }
}
