<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_post extends Model
{
    use HasFactory;
    protected $table = 'services_posts';

    protected $fillable = [
        'id',
        'images_id',
        'sub_categories_id',
        'description',
        'price',
        'status',
        'created_at',
        'updated_at'
    ];
}
