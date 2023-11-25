<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payments';

    protected $fillable = [
        'id',
        'orders_id',
        'pay_date',
        'pay_price',
        'status',
        'created_at',
        'updated_at'
    ];
}
