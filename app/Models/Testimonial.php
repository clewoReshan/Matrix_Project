<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'testimonials';

    protected $fillable = [
        'id',
        'images_id',    
        'title',    
        'descreption',
        'status',
        'created_at',
        'updated_at'
    ];
}
