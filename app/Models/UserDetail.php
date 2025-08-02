<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'name',
        'identity_number',
        'type_of_identity',
        'phone',
        'date_of_birth',
        'card_number',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
