<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    use HasFactory;
    protected $table = 'user_types';

    protected $fillable = [
        'id',
        'user_type',
        'status',
        'created_at',
        'updated_at'
    ];
}
