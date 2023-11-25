<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_post_has_question extends Model
{
    use HasFactory;
    protected $table = 'services_posts_has_questions';

    protected $fillable = [
        'id',
        'services_posts_id',	
        'questions_id',
        'status',
        'created_at',
        'updated_at'
    ];
}
