<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    use HasFactory;
    protected $table = 'sub_categories';

    protected $fillable = [
        'id',
        'main_categories_id',
        'sub_categories_name',
        'status',
        'created_at',
        'updated_at'
    ];
}
