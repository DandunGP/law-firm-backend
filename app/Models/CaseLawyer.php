<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseLawyer extends Model
{
    protected $table = 'case_lawyers';

    protected $fillable = [
        'legal_case_id',
        'user_id',
        'position',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function legalCase()
    {
        return $this->belongsTo(LegalCase::class);
    }
}
