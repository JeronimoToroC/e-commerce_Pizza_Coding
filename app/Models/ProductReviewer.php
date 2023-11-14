<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductReviewer extends Pivot
{
    protected $table = 'product_reviewers';
    public $timestamps = true;
    protected $fillable = ['product_id', 'user_id', 'rating', 'comment'];

    // Relación con el producto.
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relación con el revisor (usuario).
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
