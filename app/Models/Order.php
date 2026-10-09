<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'pincode',
        'total_amount',
        'status',
        'payment_status',
    ];

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}