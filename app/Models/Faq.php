<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $table = 'faqs';

    protected $fillable = [
        'id',
        'services_posts_id',
        'question',
        'answer',
        'status',
        'created_at',
        'updated_at'
    ];
}
