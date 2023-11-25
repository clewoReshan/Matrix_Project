<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Our_Team extends Model
{
    use HasFactory;
    protected $table = 'our_teams';

    protected $fillable = [
        'id',
        'images_id',
        'name',
        'role',
        'status',
        'created_at',
        'updated_at'
    ];
}
