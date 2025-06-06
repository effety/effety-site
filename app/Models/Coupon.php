<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'number',
        'card_type',
        'payment_type',
        'price',
        'discount',
        'quantity',
        'image',
        'end_date',
        'status',
    ];
}
