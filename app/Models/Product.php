<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'available',
        'image',
        'slug',
        'category_id',
    ];

    // Relación con categoría.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relación con los revisores.
    public function reviewers()
    {
        return $this->belongsToMany(User::class, 'product_reviewers')
            ->withPivot('rating', 'comment')
            ->withTimestamps();
    }

    // Relación con detalles de orden.
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
