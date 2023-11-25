<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_chat extends Model
{
    use HasFactory;
    protected $table = 'services_chats';

    protected $fillable = [
        'id',
        'users_id',
        'services_posts_id',
        'message',
        'date_time',
        'status',
        'created_at',
        'updated_at'
    ];
}
