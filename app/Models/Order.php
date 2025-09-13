<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'customer_company',
        'billing_address',
        'payment_method',
        'subtotal',
        'tax_amount',
        'total_amount',
        'currency',
        'status',
        'order_date'
    ];
    
    protected $casts = [
        'billing_address' => 'array',
        'order_date' => 'datetime',
        'subtotal' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'total_amount' => 'decimal:2'
    ];
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
