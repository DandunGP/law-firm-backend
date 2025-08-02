<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalCase extends Model
{
    protected $table = 'legal_cases';

    protected $fillable = [
        'client_id',
        'title',
        'description',
    ];

    public function caseLawyers()
    {
        return $this->hasMany(CaseLawyer::class);
    }

    public function caseLogs()
    {
        return $this->hasMany(CaseLog::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
