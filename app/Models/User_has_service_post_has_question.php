<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_service_post_has_question extends Model
{
    use HasFactory;
    protected $table = 'users_has_services_posts_has_questions';

    protected $fillable = [
        'id',
        'users_id',
        'services_posts_has_questions_id',
        'answer',
        'status',
        'created_at',
        'updated_at'
    ];
}
