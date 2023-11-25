<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_chat_has_Admin extends Model
{
    use HasFactory;
    protected $table = 'services_chats_has_admins';

    protected $fillable = [
        'id',
        'services_chats_id',
        'admins_id',
        'status',
        'message',
        'date_time',
        'status',
        'created_at',
        'updated_at'
    ];
}
