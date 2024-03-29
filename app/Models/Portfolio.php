<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolios';

    protected $fillable = [
        'id',
        'images_id',
        'title',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
}
