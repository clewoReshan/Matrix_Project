<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_post_detail extends Model
{
    use HasFactory;
    protected $table = 'services_posts_details';

    protected $fillable = [
        'id',
        'services_posts_id',
        'detail',
        'status',
        'created_at',
        'updated_at'
    ];
}
