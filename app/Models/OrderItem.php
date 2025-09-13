<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_id',
        'service_name',
        'price_inr',
        'price_usd',
        'quantity',
        'total_price'
    ];
    
    protected $casts = [
        'price_inr' => 'decimal:2',
        'price_usd' => 'decimal:2',
        'total_price' => 'decimal:2'
    ];
    
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
