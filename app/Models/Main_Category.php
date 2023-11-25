<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main_Category extends Model
{
    use HasFactory;
    protected $table = 'main_categories';

    protected $fillable = [
        'id',
        'main_categories_name',
        'username',
        'status',
        'created_at',
        'updated_at'
    ];
}
