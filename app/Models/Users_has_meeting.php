<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users_has_meeting extends Model
{
    use HasFactory;
    protected $table = 'users_has_meetings';

    protected $fillable = [
        'id',
        'users_id',    
        'meetings_id',    
        'meeting_link',
        'status',
        'created_at',
        'updated_at'
    ];
}
