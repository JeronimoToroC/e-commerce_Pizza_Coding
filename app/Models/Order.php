<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'total_amount',
        'status',
        'payment_method',
        'address',
    ];

    // Relación con usuario.
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // Relación con detalles de orden.
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // Relación con productos a través de detalles de orden.
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details')
            ->withPivot('quantity', 'unit_price')
            ->withTimestamps();
    }
}
