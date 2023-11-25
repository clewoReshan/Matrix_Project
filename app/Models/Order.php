<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'id',
        'users_id',
        'services_posts_id',
        'price',
        'order_status',
        'pay_status',
        'status',
        'created_at',
        'updated_at'
    ];
}
