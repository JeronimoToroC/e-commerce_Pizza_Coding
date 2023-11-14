<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class OrderDetail extends Pivot
{
    protected $table = 'order_details';
    public $timestamps = true;
    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price',];

    // Relación con el pedido.
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relación con el producto.
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
